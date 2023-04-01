<?php
class Siswa_model extends CI_Model
{
    public function getAllSiswa()
    {
        $this->db->order_by('nis asc');
        return $this->db->get('siswa')->result_array();
    }

    public function tambahDataSiswa()
    {
        $data = [
            'nis' => $this->input->post('nis', true),
            'nama' => $this->input->post('nama', true),
            'kelas' => $this->input->post('kelas', true)
        ];
        $this->db->insert('siswa', $data);
    }

    public function hapusDataSiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('siswa');
    }

    public function getSiswaById($id)
    {
        return $this->db->get_where('siswa', ['id' => $id])->row_array();
    }

    public function updateDataSiswa()
    {
        $data = [
            'nis' => $this->input->post('nis', true),
            'nama' => $this->input->post('nama', true),
            'kelas' => $this->input->post('kelas', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('siswa', $data);
    }

    public function cariDataSiswa()
    {
        $cari = $this->input->post('cari', true);
        $this->db->like('nis', $cari);
        $this->db->or_like('nama', $cari);
        $this->db->or_like('kelas', $cari);
        return $this->db->get('siswa')->result_array();
    }
}
