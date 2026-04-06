<?php
class Member {
    private $db;    // PDO 객체를 저장하기 위한 프로퍼티
// DB에 접속하고 PDO 객체를 $db에 저장
    public function __construct() {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=mydb",
                                "php", "mnu!@34");
            $this->db->setAttribute(PDO::ATTR_ERRMODE,
                                    PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
// 아이디가 $id인 레코드 반환
    public function getMember($id) {
        try {
            $query = $this->db->prepare(
                     "select * from member where id = :id");

            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
        return $result;
    }
// 회원 정보 추가
    public function insertMember($id, $pw, $name) {
        try {
            $query = $this->db->prepare(
                     "insert into member values (:id, :pw, :name)");

            $query->execute();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
// 아이디가 $id인 회원 정보 업데이트
    public function updateMember($id, $pw, $name) {
        try {
            $query = $this->db->prepare("update member set
                                  pw=:pw, name=:name where id=:id");

            $query->execute();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
}
?>