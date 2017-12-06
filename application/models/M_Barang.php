<?php

/**
 * Description of M_Barang
 *
 * @author acer
 */
class M_Barang extends CI_Model {

    public function CreateBarang($SerialNumber, $Divisi, $TipeBarang, $NamaBarang, $Lokasi1, $Lokasi2, $TanggalBuat, $LastUpdate, $Status) {
        $data = array('SerialNumber' => $SerialNumber, 'Divisi' => $Divisi,
            'TipeBarang' => $TipeBarang, 'NamaBarang' => $NamaBarang, 'Lokasi1' => $Lokasi1, 'Lokasi2' => $Lokasi2, 'TanggalBuat' => $TanggalBuat,
            'LastUpdate' => $LastUpdate, 'Status' => $Status);
        return($this->db->insert('barang', $data));
    }

    public function GetDataBarang($SerialNumber) {
        $this->db->where('SerialNumber', $SerialNumber);
        $result = $this->db->get('barang');
        return $result->row_array();
    }

    public function Update($SerialNumber, $Divisi, $TipeBarang, $NamaBarang, $Lokasi1, $Lokasi2, $LastUpdate, $Status) {
        $data = array('SerialNumber' => $SerialNumber, 'Divisi' => $Divisi,
            'TipeBarang' => $TipeBarang, 'NamaBarang' => $NamaBarang, 'Lokasi1' => $Lokasi1, 'Lokasi2' => $Lokasi2,
            'LastUpdate' => $LastUpdate, 'Status' => $Status);
        $this->db->where('SerialNumber', $SerialNumber);
        return($this->db->update('barang', $data));
    }

    public function ShowBarang() {
        $this->db->order_by('LastUpdate', 'DESC');
        $query = $this->db->get('barang');
        return $query->result();
    }
    
    public function ShowDivisi($Divisi) {
        $this->db->where('Divisi', $Divisi);
        $this->db->order_by('LastUpdate', 'DESC');
        $query = $this->db->get('barang');
        return $query->result();
    }
    
    public function Transfer($ID, $SerialNumber, $Divisi, $TipeBarang, $NamaBarang, $Lokasi1, $LokasiTujuan, $TanggalKirim, $Pengirim, $Penerima, $Paket) {
        $data = array('SerialNumber' => $SerialNumber, 'Divisi' => $Divisi,
            'TipeBarang' => $TipeBarang, 'NamaBarang' => $NamaBarang, 'Lokasi1' => $Lokasi1, 'Lokasi2' => $LokasiTujuan,
            'TanggalKirim' => $TanggalKirim, 'Pengirim' => $Pengirim, 'Penerima' => $Penerima, 'Paket' => $Paket, 'ID' => $ID);
        $this->db->where('ID', $ID);
        return($this->db->insert('kirim', $data));
    }
    
    public function GetHistoryTransfer() {
        $query = $this->db->get('kirim');
        return $query->result();
    }


}
