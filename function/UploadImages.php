<?php
function imagesIsExits($data)
{
    $allowed = array('image/jpeg', 'image/jpg', 'image/png', 'images/x-png','image/gif');

// Kiem tra xem file upload co nam trong dinh dang cho phep
    for ($i = 0; $i < count($data['Images']['name']); $i++) {
        if (in_array(strtolower($data['Images']['type'][$i]), $allowed)) {
            // Neu co trong dinh dang cho phep, tach lay phan mo rong
            $ext = substr(strrchr($data['Images']['name'][$i], '.'), 1);
            $renamed = uniqid(rand(), true) . '.' . "$ext";
            $NameIMG[] = $renamed;
            if (!move_uploaded_file($data['Images']['tmp_name'][$i], "./assets/upload/" . $renamed)) {
                $errors[] = "<p class='error'>Server problem</p>";
            }
            // Xoa file da duoc upload va ton tai trong thu muc tam
            if (isset($data['Images']['tmp_name'][$i]) && is_file($data['Images']['tmp_name'][$i]) && file_exists($data['Images']['tmp_name'][$i])) {
                unlink($data['Images']['tmp_name'][$i]);
            }
        }
    }
    return json_encode($NameIMG);
}


function uploadIMGBanner($data)
{
    $allowed = array('image/jpeg', 'image/jpg', 'image/png', 'images/x-png','image/gif');
    if (in_array(strtolower($data['type']), $allowed)) {
        // Neu co trong dinh dang cho phep, tach lay phan mo rong
        $ext = substr(strrchr($data['name'], '.'), 1);
        $renamed = uniqid(rand(), true) . '.' . "$ext";
        $NameIMG = $renamed;
        if (!move_uploaded_file($data['tmp_name'], "./assets/upload/Banner/" . $renamed)) {
            $errors[] = "<p class='error'>Server problem</p>";
        }
        // Xoa file da duoc upload va ton tai trong thu muc tam
        if (isset($data['tmp_name']) && is_file($data['tmp_name']) && file_exists($data['tmp_name'])) {
            unlink($data['tmp_name']);
        }
    }
    return $NameIMG;
}

function imagesTinTuc($data)
{
    $allowed = array('image/jpeg', 'image/jpg', 'image/png', 'images/x-png','image/gif');

// Kiem tra xem file upload co nam trong dinh dang cho phep
    for ($i = 0; $i < count($data['Images']['name']); $i++) {
        if (in_array(strtolower($data['Images']['type'][$i]), $allowed)) {
            // Neu co trong dinh dang cho phep, tach lay phan mo rong
            $ext = substr(strrchr($data['Images']['name'][$i], '.'), 1);
            $renamed = uniqid(rand(), true) . '.' . "$ext";
            $NameIMG[] = $renamed;
            if (!move_uploaded_file($data['Images']['tmp_name'][$i], "./assets/upload/News/" . $renamed)) {
                $errors[] = "<p class='error'>Server problem</p>";
            }
            // Xoa file da duoc upload va ton tai trong thu muc tam
            if (isset($data['Images']['tmp_name'][$i]) && is_file($data['Images']['tmp_name'][$i]) && file_exists($data['Images']['tmp_name'][$i])) {
                unlink($data['Images']['tmp_name'][$i]);
            }
        }
    }
    return json_encode($NameIMG);
}

