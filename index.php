<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 09/04/19
 * Time: 11:15
 */
include_once "Point3D.php";
include_once "Point2D.php";

$point2d = new Point2D("4", "6");
echo $point2d->toString() . "</br>";

$point3d = new Point3D("4", "6", "8");
echo $point3d->toString();