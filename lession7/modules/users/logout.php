<?php
unset($_SESSION['username']);
header('location:?mod=users&act=login');