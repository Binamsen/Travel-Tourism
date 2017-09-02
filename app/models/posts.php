<?php
class Posts extends Model{

    function __construct() {
        parent::__construct();
    }
    
    public function showPosts(){
        $stmt = $this->db->prepare("SELECT * FROM posts");
        $stmt->execute();
        $rs= $stmt->fetchAll();
        return $rs;
    }
    
    public function showLatestPosts(){
        $stmt = $this->db->prepare("SELECT * FROM  posts ORDER BY pid desc LIMIT 0, 3");
        $stmt->execute();
        $rs= $stmt->fetchAll();
        return $rs;
    }

    public function pagination($start, $recordPerPage){
        $stmt = $this->db->prepare("select * from  posts limit $start, $recordPerPage");
        $stmt->execute();
        $rs= $stmt->fetchAll();
        return $rs;
    }
    public function getTotalRows(){
        $stmt = $this->db->prepare("select * from  posts");
        $stmt->execute();
        $totalRow= $stmt->rowCount();
        return $totalRow;
    }

        public function addNewPost($posttitle,$slug,$content,$author,$now){
        $stmt = $this->db->prepare("INSERT INTO posts (post_title,slug,content,author,created_date) VALUES (:posttitle,:slug,:content,:author,:now)");
        $stmt->bindParam(":posttitle", $posttitle);
        $stmt->bindParam(":slug", $slug);
        $stmt->bindParam(":content", $content);
        $stmt->bindParam(":author", $author);
        $stmt->bindParam(":now", $now);
        $stmt->execute();
    }
    public function getPost($postID){
        $stmt = $this->db->prepare("SELECT * FROM  posts WHERE pid = :postID ");
        $stmt->bindParam(":postID", $postID);
        $stmt->execute();
        $rs= $stmt->fetchAll();
        return $rs;
    }
    
    public function updatePost($posttitle,$slug,$content,$mod_author,$now,$postID){
        $stmt = $this->db->prepare("UPDATE posts SET post_title = :posttitle, slug = :slug, content = :content, modify_by =:mod_author, mod_date =:now WHERE pid = :postID ");
        $stmt->bindParam(":posttitle", $posttitle);
        $stmt->bindParam(":slug", $slug);
        $stmt->bindParam(":content", $content);
        $stmt->bindParam(":mod_author", $mod_author);
        $stmt->bindParam(":now", $now);
        $stmt->bindParam(":postID", $postID);
        $stmt->execute();
    }
    
    public function deletePost($postID){//2
        $stmt = $this->db->prepare("DELETE FROM posts WHERE pid = :postID ");
        $stmt->bindParam(":postID", $postID);
        $stmt->execute();
    }
}