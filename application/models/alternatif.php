<?php

class Alternatif extends CI_Model{

    public function simpan()
    {
        $data = array(
            'nama' => $this->input->post('daerah', true)
        );

        $insert = $this->db->insert('alternatif', $data);

        if ($insert) {
            $kriteria = $this->db->get('kriteria');

            $nilai_evaluasi = array(
                $this->input->post('ls-tanah', true),
                $this->input->post('jr-sungai', true),
                $this->input->post('jr-pemukiman', true),
                $this->input->post('jr-jalan', true),
                $this->input->post('bencana', true),

            );
            if ($kriteria->num_rows() > 0) {
                $data_kriteria = array();
                foreach ($kriteria->result() as $key => $row) {
                    $x = array(
                        'id_alternatif' => $this->getLastID()->id_alternatif,
                        'id_kriteria' => $row->id_kriteria,
                        'nilai' => $nilai_evaluasi[$key]
                    );
                    $data_kriteria[] = $x;
                }
                return $this->db->insert_batch('evaluasi', $data_kriteria);
            }
        }
    }

    public function getAll()
    {
        $daerah = array();
        $data = $this->db->get('alternatif');
        if ($data->num_rows() > 0) {
            foreach ($data->result() as $row) {
                $daerah[] = $row;
            }
        }
        return $daerah;
    }

    public function getLastID(){
        $this->db->select('id_alternatif');
        $this->db->order_by('id_alternatif', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('alternatif');
        return $query->row();
    }

    public function delete($id)
    {
        $this->db->where('id_alternatif', $id);
        $this->db->delete(['evaluasi', 'alternatif']);
    }
}