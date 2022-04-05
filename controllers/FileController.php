<?php

namespace Application\Controllers;

use AbieSoft\Http\Controllers;

class FileController extends Controllers
{

    public function index()
    {
        return $this->view(page: "file/index", data: ['title' => 'File Manajer']);
    }

    protected function readDir($path)
    {

        $path = rtrim($path, '/') . '/*';
        $dirs = glob($path, GLOB_ONLYDIR);
        $files = glob($path);
        return array_unique(array_merge($dirs, $files));
    }

    public function loadingfile()
    {
        $folderID = $_GET['get'];
        $path = $this->readDir('../public/assets/storage/' . $folderID);
        $lokasisaatini = '../public/assets/storage/' . $folderID;
        $linkfile = '';
        foreach (explode("/", $lokasisaatini) as $p) {
            if ($p != '') {
                $linkfile .= $p . '/';
            }
        }
?>
        <!-- <div id='lokasi'><?php echo $linkfile; ?></div> -->
        <div id="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 100 }'>
            <div class="flex justify-left items-center">
                <?php
                $jl = count(explode("/", $linkfile)) - 1;
                for ($i = 1; $i < $jl; $i++) {
                    if ($i >= 4) {
                        $linkhistory = explode(explode("/", $linkfile)[$i], $folderID)[0];
                        if ($linkhistory == "/") {
                            $linkhistory = explode("/", $linkfile)[$i] . "/" . explode("/", $linkfile)[$i];
                        } else {
                            $linkhistory = $linkhistory . "/" . explode("/", $linkfile)[$i];
                        }

                ?>
                        <div id='<?php echo $linkhistory; ?>' onclick="loadmanajer('/'+this.id)" class="ml-4 flex justify-left items-center mr-4 cursor-pointer">
                            <div>
                                <span><?php echo explode("/", $linkfile)[$i]; ?></span>
                            </div>
                        </div>
                        <?php if ($i < $jl - 1) { ?>
                            <div>&#8250;</div>
                <?php
                        }
                    }
                } ?>
            </div>
            <?php
            if (is_array($path)) {
                foreach ($path as $a) {
                    $totalslash = count(explode("/", $a));
                    $namafile = explode("/", $a)[$totalslash - 1];
                    if ($a != "." and $a != "..") {
                        if (is_dir($a)) {
            ?>
                            <div id='<?php echo  $folderID . '/' . $namafile; ?>' onclick="loadmanajer('/'+this.id)" class="w-[80px] h-[80px] m-[10px] hover:bg-slate-300 cursor-pointer rounded-md text-center grid-item float-left">
                                <div class="mt-2 text-yellow-500 text-3xl"><i class="fa-solid fa-folder"></i></div>
                                <div class="text-xs w-full h-[32px]"><?php echo $namafile ?></div>
                            </div>
                            <?php
                        } else {
                            $filetype = explode(".", explode("/", $a)[$totalslash - 1])[1];
                            $link = str_replace('../public', '', $a);
                            $linkjadi = '';
                            foreach (explode("/", $link) as $l) {
                                if ($l != '') {
                                    $linkjadi .= $l . '/';
                                }
                            }
                            $linkjadi = substr($linkjadi, 0, -1);
                            $link = \AbieSoft\Utilities\Config::envReader('BASEURL') . '/' . $linkjadi;
                            if ($filetype == "docx" or $filetype == "doc") {
                            ?>
                                <a href="<?php echo $link; ?>" class="w-[80px] h-[80px] m-[10px] hover:bg-slate-300 cursor-pointer rounded-md text-center grid-item float-left">
                                    <div class="mt-2 text-sky-500 text-3xl"><i class="fa-solid fa-file-word"></i></div>
                                    <div class="text-xs w-full h-[32px] overflow-hidden"><?php echo $namafile ?></div>
                                </a>
                            <?php
                            }

                            if ($filetype == "docx" or $filetype == "pdf") {
                            ?>
                                <a href="<?php echo $link; ?>" class="w-[80px] h-[80px] m-[10px] hover:bg-slate-300 cursor-pointer rounded-md text-center grid-item float-left">
                                    <div class="mt-2 text-red-800 text-3xl"><i class="fa-solid fa-file-pdf"></i></div>
                                    <div class="text-xs w-full h-[32px] overflow-hidden"><?php echo $namafile ?></div>
                                </a>
                            <?php
                            }

                            if ($filetype == "jpg" or $filetype == "jpeg" or $filetype == "png" or $filetype == "bmp") {
                            ?>
                                <a href="<?php echo $link; ?>" class="w-[80px] h-[80px] m-[10px] hover:bg-slate-300 cursor-pointer rounded-md text-center grid-item float-left">
                                    <div class="mt-2 text-emerald-500 text-3xl"><i class="fa-solid fa-file-image"></i></div>
                                    <div class="text-xs w-full h-[32px] overflow-hidden"><?php echo $namafile ?></div>
                                </a>
            <?php
                            }
                        }
                    }
                }
            }
            ?>
        </div>
<?php
    }
}
