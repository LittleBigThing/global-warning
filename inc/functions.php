<?php defined('APP') or die('Cheatin\'?');

class Participants {
	
	const COUNTER = 'counter.txt';
	
	private $joined = 0;
	private $has_joined = false;
	private $just_joined = false;
	
	function __construct() {
		// create file if it does not exist and initialize it to zero
		if ( ! file_exists( self::COUNTER ) ) {
			$f = fopen( self::COUNTER, 'w');
			fwrite( $f, '0' );
			fclose( $f );
			
			$this->joined = 0;
		}
		
		$this->count_participants();
	}
	
	private function count_participants() {
		
		// Read the current value of our counter file
		$f = fopen( self::COUNTER, 'r' );
		$this->joined = fread( $f, filesize( self::COUNTER ) );
		fclose( $f );
	}
	
	public function add_participant() {
		
		if ( ! isset( $_COOKIE['joined'] ) && $this->is_human() ) {
			
			setcookie( 'joined', 1, time() + (86400 * 365) );

			$this->joined++;
			$this->just_joined = true;

			$f = fopen( self::COUNTER, 'w' );
			fwrite( $f, $this->joined );
			fclose( $f );
			
		}
		
		if ( ! $this->is_human() ) die('Are you a bot?');
			
		$this->has_joined = true;
		
	}
	
	public function joined() {
		
		return $this->joined;
	}
	
	public function has_joined() {
		
		if ( isset( $_COOKIE['joined'] ) ) {
			
			$this->has_joined = true;	
		}
		
		return $this->has_joined;
	}
	
	public function just_joined() {
		
		return $this->just_joined;
	}
	
	private function is_human() {
		return ( isset( $_POST['name'] ) && empty( $_POST['name'] ) );
	}
}