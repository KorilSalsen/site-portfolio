<?php

function print_login_button()
{
    $enter = "<a href='login.php' class='enter'>вход</a>";
    $exit = "<a href='php/logout.php' class='exit'>выход</a>";

    if ($_SESSION['auth']) {
        echo $exit;
    } else {
        echo $enter;
    }
}

function print_projects()
{
    require_once "db-connect.php";

    $sql = "SELECT * FROM `projects`";
    $result = mysql_query($sql) or die(mysql_error());

    while ($row = mysql_fetch_assoc($result)) {
        $name = $row['name'];
        $img_src = $row['img_src'];
        $url = $row['url'];
        $description = $row['description'];

        $project = "
                    <li class='work'>
                        <div class='work__img-wrapper'>
                            <div class='link-wrapper'>
                                <a href='//$url' class='img-link' title='$url' target='_blank'>Подробнее</a>
                            </div>
                            <img class='work__img' src='$img_src' alt='$url'>
                        </div>
                        <a href='//$url' class='work__link' title='$url' target='_blank'>$name</a>
                        <p class='work__description'>
                            $description
                        </p>
                    </li>";

        echo $project;
    }

    $add_project_button = "
    <!--Добавление работы-->
    <li class='work work_add'>
        <a href='' class='work__add-link work__add-link_ico popup-button' data-popup-name='new-project' title='Добавить проект'>
            <p class='work__add-text'>Добавить проект</p>
        </a>
    </li>";

    if ($_SESSION["auth"]) {
        echo $add_project_button;
    }

}