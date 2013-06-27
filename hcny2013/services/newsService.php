<?php
	// news service

	include_once("./vo/articleVO.php");
	include_once("./dao/articleDAO.php");
	
	class newsService {
		private $articleDAO;
		
		// Constructor
		public function newsService() {
			$this->articleDAO = new articleDAO();
		}
		
		// Service to add a new article
		public function addNew($articleVO) {
			return $this->articleDAO->insert($articleVO);
		}
		
		// Service to select all article based on category
		public function selectAll($articleVO) {
			return $this->articleDAO->select($articleVO, 'all');
		}
		
		public function selectOne( $articleVO ){
			return $this->articleDAO->select($articleVO, 'one');
		}
		
		// select the latest article
		public function selectTheLatestSubject( $articleVO, $latestNumber ) {
			return $this->articleDAO->seletTheLatestArticlebyCategory( $articleVO, $latestNumber );
		}
		
		// select the latest golden word
		public function selectLatestGoldenWord( $articleVO, $latestNumber ) {
			return $this->articleDAO->seletTheLatestArticlebyCategory( $articleVO, $latestNumber );
		}
		
		// select Prior Articles by Category
		public function selectPriorArticlebyCategory( $articleVO, $priorNumber ) {
			return $this->articleDAO->selectPriorArticlebyCategory( $articleVO, $priorNumber );
		}
		
		// select available year list
		public function selectAllYear( $articleVO ) {
			return $this->articleDAO->selectAllYear( $articleVO );
		}
		
		public function getGroupStudyList() {
			return $this->articleDAO->getGroupStudyList();
		}
		
		// Service to delete article based on category and id
		public function delete($articleVO) {
			return $this->articleDAO->delete($articleVO);
		}
		
		// Service to update article 
		public function update($articleVO) {
			return $this->articleDAO->update($articleVO);
		}
		
		public function updateQuestions($articleVO) {
			return $this->articleDAO->updateQuestions($articleVO);
		}
		
		public function setArticleDAO($articleDAO) {
			$this->articleDAO = $articleDAO;
		}
		
		public function getArticleDAO() {
			return $this->articleDAO;
		}
	}
?>