<?php

class WP extends CI_Model {

    public function hitung(){
        $data_wp = array();
        $bobot = array();
        $alternatif = $this->db->get('alternatif')->result_array();
        $kriteria = $this->db->get('kriteria')->result_array();
        //Memasukkan Data Kedalam Array Data Weighted Product
        for($x=0; $x<count($alternatif); $x++){
            $data_wp[$x]['id_alternatif'] = $alternatif[$x]['id_alternatif'];
            $data_wp[$x]['nama'] = $alternatif[$x]['nama'];
        }
        //Mengambil Nilai Bobot dan menggunakan Kode id_kriteria sebagai index key
        for($x=0; $x<count($kriteria); $x++){
            $bobot[$kriteria[$x]['id_kriteria']]=$kriteria[$x]['hasil'];
        }
        
        //Mengambil Nilai alternatif
        for($x=0; $x<count($alternatif); $x++){
            //Mengambil Nilai per alternatif
            $this->db->select('*');
            $this->db->from('evaluasi');
            $this->db->where('id_alternatif',$alternatif[$x]['id_alternatif']);
            $nilai_alternatif = $this->db->get()->result();
            //Nilai Vektor S Awal adalah 0
            $nilai_vektor = 0;
            //Perulangan Untuk Setiap Nilai alternatif
            foreach($nilai_alternatif as $nilai_alt){
                //Menghitung nilai Vektor dengan mengkuadratkan nilai kriteria dengan bobot key index kriteria
                $nilai_vektor = $nilai_vektor + pow($nilai_alt->nilai,$bobot[$nilai_alt->id_kriteria]);
            }
            //Menambah Nilai Vektor S
            $data_wp[$x]['vektor_s'] = $nilai_vektor;
        }
        
        //Menghitung Total Nilai Vektor S
        $total_vektor_s = 0;
        foreach ($data_wp as $num => $values) {
            $total_vektor_s += $values['vektor_s'];
        }
        //Menghitung Nilai Vektor V dengan Membagi Nilai Vektor S Siswa dengan Total Vektor S
        for($x=0; $x<count($data_wp); $x++){
            $data_wp[$x]['vektor_v'] = $data_wp[$x]['vektor_s']/$total_vektor_s;
        }
        
        usort($data_wp, function($a, $b) {
            if ($a['vektor_v'] == $b['vektor_v'])
                return 0;
            return $a['vektor_v'] < $b['vektor_v'] ? 1 : -1;
        });
        
        return $data_wp;
    }
}