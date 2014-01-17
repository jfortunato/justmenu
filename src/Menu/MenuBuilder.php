<?php namespace JustMenu\Menu;

use JustMenu\Menu\Presenter\MenuPresenter;

class MenuBuilder
{
    /**
     * Manager responsible for fetching/creating entities.
     *
     * @var JustMenu\Menu\ManagerInterface
     */
    protected $entityManager;

    /**
     * MenuPresenter that will wrap the built menu.
     *
     * @var JustMenu\Menu\Presenter\MenuPresenter
     */
    protected $presenter;

    /**
     * The Menu that is being built.
     *
     * @var JustMenu\Menu\Menu
     */
    protected $menu;

    /**
     * Construct a new MenuBuilder with required ManagerInterface
     * and MenuPresenter.
     *
     * @param  ManagerInterface $entityManager
     * @param  MenuPresenter    $presenter
     * @return void
     */
    public function __construct(ManagerInterface $entityManager, MenuPresenter $presenter, Menu $menu = null)
    {
        $this->entityManager = $entityManager;
        $this->presenter = $presenter;
        $this->menu = $menu ?: new Menu;
    }

    /**
     * Builds the full menu then wraps it with a MenuPresenter
     * that is ready to present.
     *
     * @return JustMenu\Menu\Presenter\MenuPresenter
     */
    public function build()
    {
        $this->buildMenu();

        return $this->wrapMenuWithPresenter();
    }

    protected function buildMenu()
    {
        $categories = $this->entityManager->assembleCategories();
        foreach ($categories as $category) {
            $this->menu->addCategory($category);
        }
    }

    protected function wrapMenuWithPresenter()
    {
        return $this->presenter->setComponent($this->menu);
    }

    /**
     * Gets the value of $entityManager
     *
     * @return JustMenu\Menu\ManagerInterface
     */
    public function getManager()
    {
        return $this->entityManager;
    }

    /**
     * Gets the value of $presenter
     *
     * @return JustMenu\Menu\Presenter\MenuPresenter
     */
    public function getMenuPresenter()
    {
        return $this->presenter;
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
}
