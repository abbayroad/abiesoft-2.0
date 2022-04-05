<?php

namespace AbieSoft\Magic;

class Reader
{

    public static function ip(): string
    {
        $ip = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ip = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ip = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ip = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ip = $_SERVER['REMOTE_ADDR'];
        else
            $ip = 'Ip Tidak Dikenali';
        return $ip;
    }

    public static function perangkat(): string
    {
        $perangkat =  $_SERVER['HTTP_USER_AGENT'];
        return $perangkat;
    }

    public static function format($datetime, $model): string
    {
        $hari = date('N', strtotime($datetime));
        if ($hari == "1") {
            $hari = "Senin";
        }
        if ($hari == "2") {
            $hari = "Selasa";
        }
        if ($hari == "3") {
            $hari = "Rabu";
        }
        if ($hari == "4") {
            $hari = "Kamis";
        }
        if ($hari == "5") {
            $hari = "Jum'at";
        }
        if ($hari == "6") {
            $hari = "Sabtu";
        }
        if ($hari == "7") {
            $hari = "Minggu";
        }

        $bulan = ltrim(substr($datetime, 5, 2), 0);
        $tgl = ltrim(substr($datetime, 8, 2), 0);
        $tahun = ltrim(substr($datetime, 0, 4), 0);

        if ($bulan == "1") {
            $namabulan = "Januari";
        }
        if ($bulan == "2") {
            $namabulan = "Februari";
        }
        if ($bulan == "3") {
            $namabulan = "Maret";
        }
        if ($bulan == "4") {
            $namabulan = "April";
        }
        if ($bulan == "5") {
            $namabulan = "Mei";
        }
        if ($bulan == "6") {
            $namabulan = "Juni";
        }
        if ($bulan == "7") {
            $namabulan = "Juli";
        }
        if ($bulan == "8") {
            $namabulan = "Agustus";
        }
        if ($bulan == "9") {
            $namabulan = "September";
        }
        if ($bulan == "10") {
            $namabulan = "Oktober";
        }
        if ($bulan == "11") {
            $namabulan = "November";
        }
        if ($bulan == "12") {
            $namabulan = "Desember";
        }

        $tglfull = $tgl . " " . $namabulan . " " . $tahun;
        $tglsimpel = $tgl . " " . substr($namabulan, 0, 3) . " " . $tahun;

        if (strlen($bulan) == 2) {
            $bulan = $bulan;
        } else {
            $bulan = "0" . $bulan;
        }

        if (strlen($tgl) == 2) {
            $tgl = $tgl;
        } else {
            $tgl = "0" . $tgl;
        }

        $tgledit = $tahun . "-" . $bulan . "-" . $tgl;

        return match ($model) {
            'hari' => $hari,
            'bulan' => $bulan,
            'namabulan' => $namabulan,
            'tgl' => $tgl,
            'tahun' => $tahun,
            'tglfull' => $tglfull,
            'tglsimpel' => $tglsimpel,
            'tgledit' => $tgledit
        };
    }

    public static function hariini($format): string
    {
        $hariini = self::format(date('Y-m-d'), 'hari') . ", " . self::format(date('Y-m-d'), $format);
        return $hariini;
    }

    public static function unitdata($ukuran)
    {
        $satuan = "";
        $nilai = "";
        if (strlen($ukuran) == "4") {
            $satuan = "KB";
            $nilai = substr($ukuran, 0, 1);
        } else if (strlen($ukuran) == "5") {
            $satuan = "KB";
            $nilai = substr($ukuran, 0, 2);
        } else if (strlen($ukuran) == "6") {
            $satuan = "KB";
            $nilai = substr($ukuran, 0, 3);
        } else if (strlen($ukuran) == "7") {
            $satuan = "MB";
            $nilai = substr($ukuran, 0, 1);
        } else if (strlen($ukuran) == "8") {
            $satuan = "MB";
            $nilai = substr($ukuran, 0, 2);
        } else if (strlen($ukuran) == "9") {
            $satuan = "MB";
            $nilai = substr($ukuran, 0, 3);
        } else if (strlen($ukuran) == "10") {
            $satuan = "TB";
            $nilai = substr($ukuran, 0, 1);
        } else if (strlen($ukuran) == "11") {
            $satuan = "TB";
            $nilai = substr($ukuran, 0, 2);
        } else if (strlen($ukuran) == "12") {
            $satuan = "TB";
            $nilai = substr($ukuran, 0, 3);
        } else {
            $satuan = "B";
            $nilai = $ukuran;
        }

        return $nilai . $satuan;
    }

    public static function angka($angka)
    {
        echo number_format($angka);
    }
}
