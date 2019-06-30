<?php

    //glob ile helpers içindeki tüm php dosyalarını bulduk ve dahil ettik

    foreach (glob( PATH . '/models/helpers/*.php') as $helpersFile)
    {
        require $helpersFile;
    }
