<?php 
class SinhVien{
    private int $MSSV;
    private String $Name;
    private int $Gender;
    private int $MaKhoa;
    public function __construct(int $MSSV, String $Name, String $Gender, String $MaKhoa){
        $this->MSSV = $MSSV;
        $this->Name = $Name;
        $this->Gender = $Gender;
        $this->MaKhoa = $MaKhoa;
    }
    public function getMSSV() {
        return $this->MSSV;
    }
    public function setMSSV($MSSV) {
        $this->MSSV = $MSSV;
    }
    public function getName(){
        return $this->Name;
    }
    public function setName($name){
        $this->Name = $name;
    }
    public function getGender(){
        return $this->Gender;
    }
    public function setGender($gender){
        $this->Gender = $gender;
    }
    public function getMaKhoa(){
        return $this->MaKhoa;
    }
    public function setMaKhoa($maK)
    {
        $this->MaKhoa = $maK;
    }
}
?>