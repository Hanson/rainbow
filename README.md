# Rainbow

A skin for [laravel-admin](https://laravel-admin.org/)

## Install

`composer require hanson/rainbow:dev-master -vvv`

## Skins

Support skins:
* `rainbow-blue` 
* `rainbow-green`
* `rainbow-red`
* `rainbow-orange`
* `rainbow-white-blue`
* `rainbow-origin` to revert the origin skin.(This is not a skin.)

publish resources

`php artisan vendor:publish --tag=rainbow-blue --force` 

## Configuration

```php
// admin.php
<?php

return [
   // select from support skins(except rainbow-origin).
  'skin' => 'rainbow-blue',  
];
```

## Snapshot

### rainbow-blue

![1580717548_1_.jpg](https://i.loli.net/2020/02/03/89H7Z4f2MTJOB3d.png)

![L_P1Q@IZFF_7R_1IB_TNDDR.png](https://i.loli.net/2020/02/03/rs5qDwAHIEKnfve.png)

![3H0M0KKOPOO85E_S25VKJ4U.png](https://i.loli.net/2020/02/03/4pXoukDGxIYLn8h.png)

### rainbow-white-blue

![_1_HXO64101_6G_L0V09HUN.png](https://i.loli.net/2020/02/03/IRmnEDLg5lAijtB.png)

![SPL_1`SZ_~~GO_127YSY7L2.png](https://i.loli.net/2020/02/03/KryFgkzUnmdQBNG.png)

### rainbow-green

![H1I_B_XBIZ0JZ__E8M`3~B8.png](https://i.loli.net/2020/02/03/Fya3gm6V1HqfkSJ.png)

![RU__O1_K4QNS__7F8R__N3A.png](https://i.loli.net/2020/02/03/qGPzJCLIrmnStuN.png)

### rainbow-red

![_0_5Y`3QT_M`X7BGK8DS`VC.png](https://i.loli.net/2020/02/03/cYFmSn4urIyb5zt.png)

![LY@@8O4DL_JV@_HWF30FYFH.png](https://i.loli.net/2020/02/03/q1TkbOyBSn3tpiC.png)

### rainbow-orange

![2CK_XF4W4Q_FMC@L_PX__C8.png](https://i.loli.net/2020/02/03/GBJhkC6EXuF3cVo.png)

![O5T3XS_8DQE_~KQO_5__M98.png](https://i.loli.net/2020/02/03/wgvp7qG29OFxh45.png)
