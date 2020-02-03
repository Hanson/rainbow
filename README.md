# Rainbow

A skin for [laravel-admin](https://laravel-admin.org/)

## Install

`composer require hanson/rainbow:dev-master -vvv`

## Skins

Support skins:
* `rainbow-blue` 蓝色
* `rainbow-green` 绿色
* `rainbow-red` 红色
* `rainbow-orange` 橙色
* `rainbow-yellow` 黄色
* `rainbow-olive` 橄榄
* `rainbow-cyan` 天青
* `rainbow-white-blue` 白蓝
* `rainbow-origin` to revert the origin skin.(This is not a skin.) 用于回滚样式（不是皮肤）

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

### rainbow-yellow

![E_C`_NOI6_319WNJXK3TQTA.png](https://i.loli.net/2020/02/03/pxY3h9Zw5Nb1VmM.png)

![_Q94W9E33UO_VFPWN_O380R.png](https://i.loli.net/2020/02/03/xk79bPr3aS5Q8FJ.png)

### rainbow-olive

![J_JJLPR4FCQ9_`__CBAO_64.png](https://i.loli.net/2020/02/03/J8OcZTsnyqS4VWl.png)

![VN_CL1C34_`_2I_`3BBV1NT.png](https://i.loli.net/2020/02/03/Ib6QCalvzeYUht5.png)

### rainbow-cyan

![HYYAIM_`IPQE949N0_RWVMD.png](https://i.loli.net/2020/02/03/a1hF7zdTMlvqKmk.png)

![HIFPNCXI_BK1OZG__X_L7`3.png](https://i.loli.net/2020/02/03/8jXJRq3Kz4T5wU6.png)
