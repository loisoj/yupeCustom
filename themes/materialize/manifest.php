<?php
$yp_Guest = Yii::app()->user->isGuest;
$yp_root =  Yii::app()->user->checkAccess('admin');
//$yp_Pageid = Yii::app()->controller->currentPage->id;
$yp_thisWay = Yii::app()->getRequest()->getPathInfo();
$yp_thisFullWay = Yii::app()->getRequest()->getRequestUri();
$yp_thisGetWay = Yii::app()->getRequest()->getQueryString();
$yp_siteName = Yii::app()->getRequest()->getHostInfo();
