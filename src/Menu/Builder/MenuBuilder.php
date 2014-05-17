<?php namespace JustMenu\Menu\Builder;

use JustMenu\Repository\Category\CategoryRepositoryInterface;
use JustMenu\Menu\Menu;
use JMS\Serializer\Serializer;

class MenuBuilder implements MenuBuilderInterface
{
    protected $repository;

    /**
     * The Menu that is being built.
     *
     * @var JustMenu\Menu\Menu
     */
    protected $menu;

    protected $serializer;

    /**
     * Construct a new MenuBuilder
     *
     * @return void
     */
    public function __construct(CategoryRepositoryInterface $repository, Menu $menu, Serializer $serializer)
    {
        $this->repository = $repository;
        $this->menu = $menu;
        $this->serializer = $serializer;
    }

    /**
     * Builds the full menu then combines choice items
     * so it is ready to present
     *
     */
    public function build()
    {
        $this->buildMenu();

        $this->combineChoiceItems();

        $this->serializeMenu();
    }

    protected function buildMenu()
    {
        $categories = $this->repository->getCategoriesByOrder();
        foreach ($categories as $category) {
            $this->menu->addCategory($category);
        }
    }

    protected function serializeMenu()
    {
        $this->menu = $this->serializer->serialize($this->menu, 'json');
    }

    /**
     * Gets the value of $menu
     *
     * @return JustMenu\Menu\Menu
     */
    public function getMenu()
    {
        return $this->menu;
    }

    public function setMenu($menu)
    {
        $this->menu = $menu;
    }

    public function getSerializer()
    {
        return $this->serializer;
    }

    public function combineChoiceItems()
    {
        $combined_ids = array();

        foreach ($this->menu->getCategories() as $category) {
            for ($i = 0; $i < $category->items->count(); $i++) {
                if ($category->items[$i]->hasChoice()) {
                    // avoid duplicates...when serialized the choice will contain all items
                    if (in_array($category->items[$i]->choice->id, $combined_ids)) {
                        unset($category->items[$i]);
                        continue;
                    }
                    $combined_ids[] = $category->items[$i]->choice->id;
                    $choice = $category->items[$i]->choice;
                    $choice->setSizes();
                    $category->items[$i] = $choice;
                }
            }
            $category->items = $category->items->getValues();
        }
    }
}
