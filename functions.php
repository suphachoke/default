<?php

function createThumbnail($path, $file, $files) {
    $images = "" . $path . "/" . $file;
    $new_images = "" . $path . "/" . $file;
    $width = 200;
    $size = GetimageSize($images);
    $height = (($size[1] / $size[0]) * $width);
    //$height = round($width * $size[1] / $size[0]);
    //echo $files[type];
    if ($files['type'] == "image/x-png" || $files['type'] == "image/png") {
        $images_orig = ImageCreateFromPNG($images);
    } else {
        $images_orig = ImageCreateFromJPEG($images);
    }
    $photoX = ImagesX($images_orig);
    $photoY = ImagesY($images_orig);
    $images_fin = ImageCreateTrueColor($width, $height);
    ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width + 1, $height + 1, $photoX, $photoY);
    ImageJPEG($images_fin, $new_images);
    ImageDestroy($images_orig);
    ImageDestroy($images_fin);
}

function monthThai($n) {
    if ($n == "01") {
        return "มกราคม";
    } else if ($n == "02") {
        return "กุมภาพันธ์";
    } else if ($n == "03") {
        return "มีนาคม";
    } else if ($n == "04") {
        return "เมษายน";
    } else if ($n == "05") {
        return "พฤษภาคม";
    } else if ($n == "06") {
        return "มิถุนายน";
    } else if ($n == "07") {
        return "กรกฎาคม";
    } else if ($n == "08") {
        return "สิงหาคม";
    } else if ($n == "09") {
        return "กันยายน";
    } else if ($n == "10") {
        return "ตุลาคม";
    } else if ($n == "11") {
        return "พฤษจิกายน";
    } else if ($n == "12") {
        return "ธันวาคม";
    }
    return "-";
}

function thaiLangMoney($num) {
    $str = "";
    for ($i = 100000; $i > 1; $i = ($i / 10)) {
        $ext = "";
        if ($i == 100000) {
            $ext = "แสน";
        } else if ($i == 10000) {
            $ext = "หมื่น";
        } else if ($i == 1000) {
            $ext = "พัน";
        } else if ($i == 100) {
            $ext = "ร้อย";
        } else if ($i == 10) {
            $ext = "สิบ";
        }
        if (($num / $i) > 0) {
            $n = floor($num / $i);
            if ($n == 1) {
                $str .= ($ext == "สิบ") ? $ext : "หนึ่ง" . $ext;
            } else if ($n == 2) {
                $str .= ($ext == "สิบ") ? "ยี่" . $ext : "สอง" . $ext;
            } else if ($n == 3) {
                $str .= "สาม" . $ext;
            } else if ($n == 4) {
                $str .= "สี่" . $ext;
            } else if ($n == 5) {
                $str .= "ห้า" . $ext;
            } else if ($n == 6) {
                $str .= "หก" . $ext;
            } else if ($n == 7) {
                $str .= "เจ็ด" . $ext;
            } else if ($n == 8) {
                $str .= "แปด" . $ext;
            } else if ($n == 9) {
                $str .= "เก้า" . $ext;
            }
            $num = $num % $i;
        }
    }
    $n = substr($num, strlen($num) - 1);
    if ($n == 1) {
        $str .= "เอ็ด";
    } else if ($n == 2) {
        $str .= "สอง";
    } else if ($n == 3) {
        $str .= "สาม";
    } else if ($n == 4) {
        $str .= "สี่";
    } else if ($n == 5) {
        $str .= "ห้า";
    } else if ($n == 6) {
        $str .= "หก";
    } else if ($n == 7) {
        $str .= "เจ็ด";
    } else if ($n == 8) {
        $str .= "แปด";
    } else if ($n == 9) {
        $str .= "เก้า";
    }
    return $str . "บาทถ้วน";
}
