<?php namespace Modules\Hello\Sidebar;

use Maatwebsite\Sidebar\Badge;
use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;


class SidebarExtender implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct()
    {

    }

    /**
     * @param Menu $menu
     *
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {  
        $menu->group(trans('HelloSiderbar'), function (Group $group) {
			$group->weight(0);
			$group->icon('icon-strategy');
			$group->item(trans('HelloSiderbar'), function (Item $item) {
				$item->weight(0);
				$item->icon('icon-strategy');
				$item->item(trans('HelloSiderbar'), function (Item $item) {
					$item->weight(0);
					$item->icon('icon-grid2');
					$item->route('backend.hello.index');
				});
			});
        });

        return $menu;
    }
}