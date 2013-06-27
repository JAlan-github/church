<?php
	// user vo mapping to user table
	class articleVO{
		private $id;
		private $category;
		private $date;
		private $place;
		private $title;
		private $maker;
		private $description;
		private $content;
		private $latestUpdateUser;
		private $latestUpdateDate;
		private $comments;
		
		// constructor
		public function __construct() {
     		
   		}
		
		public function setId($id) {
			$this->id = $id;
		}
		public function getId() {
			return $this->id;
		}
		
		public function setCategory($category) {
			$this->category = $category;
		}
		public function getCategory() {
			return $this->category;
		}
		
		public function setDate($date) {
			$this->date = $date;
		}
		public function getDate() {
			return $this->date;
		}
		
		public function setPlace($place) {
			$this->place = $place;
		}
		public function getPlace() {
			return $this->place;
		}
		
		public function setTitle($title) {
			$this->title = $title;
		}
		public function getTitle() {
			return $this->title;
		}
		
		public function setMaker($maker) {
			$this->maker = $maker;
		}
		public function getMaker() {
			return $this->maker;
		}
		
		public function setDescription($description) {
			$this->description = $description;
		}
		public function getDescription() {
			return $this->description;
		}
		
		public function setContent($content) {
			$this->content = $content;
		}
		public function getContent() {
			return $this->content;
		}
		
		public function setLatestUpdateUser($latestUpdateUser) {
			$this->latestUpdateUser = $latestUpdateUser;
		}
		public function getLatestUpdateUser() {
			return $this->latestUpdateUser;
		}
		
		public function setLatestUpdateDate($latestUpdateDate) {
			$this->latestUpdateDate = $latestUpdateDate;
		}
		public function getLatestUpdateDate() {
			return $this->latestUpdateDate;
		}
		
		public function setComments($comments) {
			$this->comments = $comments;
		}
		public function getComments() {
			return $this->comments;
		}
	}
?>