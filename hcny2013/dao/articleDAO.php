<?php
	// DAO for article table;
	
	class articleDAO{
		
		// constructor
		public function articleDAO() {
     		
   		}
	
		// Logic
		public function insert( $articleVO ) {
			$query = "insert into article(category, date, title, maker, place, description, content, latest_update_user, latest_update_date, comments) values('" . $articleVO->getCategory() . "', '" . $articleVO->getDate() . "', '" . $articleVO->getTitle() . "', '" . $articleVO->getMaker() . "', '" . $articleVO->getPlace() . "', '" . $articleVO->getDescription() . "', '" . $articleVO->getContent() . "', '" . $articleVO->getLatestUpdateUser() . "', '" . $articleVO->getLatestUpdateDate() . "', '" . $articleVO->getComments() . "')";
			
			$result = mysql_query( $query ) or die( '<h4>Error inserting article data, please contact Application Admin (1-917-689-6943)</h4>' ); 
			
			return $result;
		}
		
		public function select( $articleVO, $type ) {
			switch( $type ) {
				case "all":
					if( $articleVO->getDate() != NULL ) {
						$query = "select * from article where category='" . $articleVO->getCategory() . "' and Year(date) = " . $articleVO->getDate() . " order by date desc, id desc";	
					} else {
						$query = "select * from article where category='" . $articleVO->getCategory() . "' order by date desc, id desc limit 0, 10";
					}
				break;
				
				case "one":
					$query = "select date, title, maker, content from article where category='" . $articleVO->getCategory() . "' and id=" . $articleVO->getId();
				break;
			}
			
			$result = mysql_query( $query ) or die( '<h4>Error selecting article data, please contact Application Admin (1-917-689-6943)</h4>' ); 
			
			return $result;
		}
		
		public function selectAllYear( $articleVO ) {
			$query = "select distinct Year(date) as year from article where category = '" . $articleVO->getCategory() . "' order by year desc";
			
			$result = mysql_query( $query ) or die( '<h4>Error selecting article year list, please contact Application Admin (1-917-689-6943)</h4>' ); 
			
			return $result;
		}
		
		// select the latest article by category
		public function seletTheLatestArticlebyCategory($articleVO, $latestNumber) {
			$query = "select * from article where category = '" . $articleVO->getCategory() . "' order by date desc, id desc limit 0, " . $latestNumber;
			
			$result = mysql_query( $query ) or die( '<h4>Error selecting the latest article data, please contact Application Admin (1-917-689-6943)</h4>' ); 
			
			return $result;
		}
		
		public function selectPriorArticlebyCategory($articleVO, $priorNumber) {
			$query = "select * from article where category = '" . $articleVO->getCategory() . "' and date < '" . $articleVO->getDate() . "' order by date desc, id desc limit 0, " . $priorNumber;
			
			$result = mysql_query( $query ) or die( '<h4>Error selecting prior articles data, please contact Application Admin (1-917-689-6943)</h4>' ); 
			
			return $result;
		}
		
		public function getGroupStudyList() {
			$query = "select ar.id, ar.date, ar.place, ar.title, ar.maker, ar.content, arr.reference_id, file.file_link, file.category from article ar left join article_reference arr on(ar.id = arr.article_id) left join file file on(arr.reference_id = file.id) where ar.category = 'groupStudy' order by id desc";
			
			$result = mysql_query( $query ) or die( '<h4>Error selecting group study list data, please contact Application Admin (1-917-689-6943)</h4>' ); 
			
			return $result;
		}
		
		public function update($articleVO) {
			$query = "update article set category='" . $articleVO->getCategory() . "', date='" . $articleVO->getDate() . "', place='" . $articleVO->getPlace() . "', title='" . $articleVO->getTitle() . "', maker='" . $articleVO->getMaker() . "', description='" . $articleVO->getDescription() . "', content='" . $articleVO->getContent() . "', latest_update_user='" . $articleVO->getLatestUpdateUser() . "', latest_update_date='" . $articleVO->getLatestUpdateDate() . "', comments='" . $articleVO->getComments() . "' where id=" . $articleVO->getId();
						
			$result = mysql_query( $query ) or die( '<h4>Error updating article data, please contact Application Admin (1-917-689-6943)</h4>' ); 
			
			return $result;
		}
		
		public function updateQuestions($articleVO) {
			$query = "update article set category='" . $articleVO->getCategory() . "', latest_update_user='" . $articleVO->getLatestUpdateUser() . "', latest_update_date='" . $articleVO->getLatestUpdateDate() . "', comments='" . $articleVO->getComments() . "' where id=" . $articleVO->getId();
						
			$result = mysql_query( $query ) or die( '<h4>Error updating questions data, please contact Application Admin (1-917-689-6943)</h4>' ); 
			
			return $result;
		}
		
		public function delete($articleVO) {
			$query = "delete from article where category='" . $articleVO->getCategory() . "' and id=" . $articleVO->getId();
			
			$result = mysql_query( $query ) or die( '<h4>Error deleting article data, please contact Application Admin (1-917-689-6943)</h4>' ); 
			
			return $result;
		}
	}
?>