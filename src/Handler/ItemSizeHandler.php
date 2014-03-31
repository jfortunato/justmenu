<?php namespace JustMenu\Handler;

use JMS\Serializer\Handler\ArrayCollectionHandler;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\VisitorInterface;
use Doctrine\ORM\PersistentCollection;
use JMS\Serializer\Context;
use JustMenu\Menu\Entity\Item;

class ItemSizeHandler extends ArrayCollectionHandler
{
    public static function getSubscribingMethods()
    {
        return array(
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'ArrayCollection',
                'method' => 'serializeCollection',
            ),
        );
    }

    public function serializeCollection(VisitorInterface $visitor, PersistentCollection $collection, array $type, Context $context)
    {
        if ($collection->getOwner() instanceof Item && $collection->getTypeClass()->name === 'JustMenu\Menu\Entity\Size') {
            // TODO we need to get the overriden item sizes
            $sizes = $collection->getOwner()->category()->getSizes();

            $type['name'] = 'array';

            return $visitor->visitArray($sizes->toArray(), $type, $context);
        }

        return parent::serializeCollection($visitor, $collection, $type, $context);
    }

}
