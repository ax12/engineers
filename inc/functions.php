<?php


//Определям какой фал подключать в зависимости
//от адреса в адресной строке, файлы должны называться ЧПУ урлами
function getFilenameFoo ( $argument ){
    if ($argument == '/') {
        return 'This main page';
    }else {
        return 'is not main page';
    }

}

    //
//    if ($argument == '/') { //определям главная страница или нет
//        $file_name_by_address = 'catalog/generators_arrays.php'; //если это главная страницы, то подключаем каталог с генераторами
//        return $file_name_by_address;
//    } else {
//        $file_name_by_address = $path_by_address; //если не главная, то подключам файл с названием как в адресной строке
//        return $file_name_by_address;
//    }
//}


?>