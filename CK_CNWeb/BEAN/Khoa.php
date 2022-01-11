<?php 
class Khoa
{
    private int $MaKhoa;
    private string $TenKhoa;
    public function __construct(String $MaKhoa,String $TenKhoa)
    {
        $this->MaKhoa = $MaKhoa;
        $this->TenKhoa = $TenKhoa;
    }
    public function setMaKhoa($MaKhoa)
    {
        $this->MaKhoa = $MaKhoa;
    }
    public function getMaKhoa()
    {
        return $this->MaKhoa;
    }
    public function setTenKhoa($TenKhoa)
    {
        $this->TenKhoa = $TenKhoa;
    }
    public function getTenKhoa()
    {
        return $this->TenKhoa;
    }
}
    ?>