<?php
echo "Halaman tambah file baru ke folder uploads/";

exec("mkdir /var/www/html/uploads");
exec("touch uploads/test.txt");


