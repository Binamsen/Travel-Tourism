<?php
class SiteSettings extends Model{

    function __construct() {
        parent::__construct();
    }
    
    public function showSiteDetails(){
        $stmt = $this->db->prepare("SELECT * FROM siteDetails");
        $stmt->execute();
        $rs= $stmt->fetchAll();
        return $rs;
    }
    
    public function updateSiteDetails($sitename,$slogan,$address,$phone,$email,$pobox,$siteID){
        $stmt = $this->db->prepare("UPDATE posts SET post_title = :posttitle, slug = :slug, content = :content, modify_by =:mod_author, mod_date =:now WHERE pid = :postID ");
        $stmt->bindParam(":posttitle", $posttitle);
        $stmt->bindParam(":slug", $slug);
        $stmt->bindParam(":content", $content);
        $stmt->bindParam(":mod_author", $mod_author);
        $stmt->bindParam(":now", $now);
        $stmt->bindParam(":postID", $postID);
        $stmt->execute();
    }
}