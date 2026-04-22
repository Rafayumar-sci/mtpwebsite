<?php

// Player Class
class Player {
    private $name;
    private $symbol;
    
    public function __construct($name, $symbol) {
        $this->name = $name;
        $this->symbol = $symbol;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getSymbol() {
        return $this->symbol;
    }
}

// Board Class
class Board {
    private $grid;
    private $size;
    
    public function __construct($size = 3) {
        $this->size = $size;
        $this->initializeBoard();
    }
    
    private function initializeBoard() {
        $this->grid = array_fill(0, $this->size, array_fill(0, $this->size, ' '));
    }
    
    public function placeMove($row, $col, $symbol) {
        if ($row < 0 || $row >= $this->size || $col < 0 || $col >= $this->size) {
            return false;
        }
        
        if ($this->grid[$row][$col] !== ' ') {
            return false;
        }
        
        $this->grid[$row][$col] = $symbol;
        return true;
    }
    
    public function displayBoard() {
        echo "\n";
        for ($i = 0; $i < $this->size; $i++) {
            echo " ";
            for ($j = 0; $j < $this->size; $j++) {
                echo " " . $this->grid[$i][$j] . " ";
                if ($j < $this->size - 1) {
                    echo "|";
                }
            }
            echo "\n";
            if ($i < $this->size - 1) {
                echo "-----------\n";
            }
        }
        echo "\n";
    }
    
    public function isFull() {
        for ($i = 0; $i < $this->size; $i++) {
            for ($j = 0; $j < $this->size; $j++) {
                if ($this->grid[$i][$j] === ' ') {
                    return false;
                }
            }
        }
        return true;
    }
    
    public function checkWinner($symbol) {
        // Check rows
        for ($i = 0; $i < $this->size; $i++) {
            $win = true;
            for ($j = 0; $j < $this->size; $j++) {
                if ($this->grid[$i][$j] !== $symbol) {
                    $win = false;
                    break;
                }
            }
            if ($win) return true;
        }
        
        // Check columns
        for ($j = 0; $j < $this->size; $j++) {
            $win = true;
            for ($i = 0; $i < $this->size; $i++) {
                if ($this->grid[$i][$j] !== $symbol) {
                    $win = false;
                    break;
                }
            }
            if ($win) return true;
        }
        
        // Check diagonal (top-left to bottom-right)
        $win = true;
        for ($i = 0; $i < $this->size; $i++) {
            if ($this->grid[$i][$i] !== $symbol) {
                $win = false;
                break;
            }
        }
        if ($win) return true;
        
        // Check diagonal (top-right to bottom-left)
        $win = true;
        for ($i = 0; $i < $this->size; $i++) {
            if ($this->grid[$i][$this->size - 1 - $i] !== $symbol) {
                $win = false;
                break;
            }
        }
        return $win;
    }
}

// Game Class
class TicTacToe {
    private $player1;
    private $player2;
    private $board;
    private $currentPlayer;
    
    public function __construct($player1Name, $player2Name) {
        $this->player1 = new Player($player1Name, 'X');
        $this->player2 = new Player($player2Name, 'O');
        $this->board = new Board(3);
        $this->currentPlayer = $this->player1;
    }
    
    public function switchPlayer() {
        $this->currentPlayer = ($this->currentPlayer === $this->player1) ? $this->player2 : $this->player1;
    }
    
    public function playMove($row, $col) {
        if ($this->board->placeMove($row, $col, $this->currentPlayer->getSymbol())) {
            return true;
        }
        return false;
    }
    
    public function getCurrentPlayer() {
        return $this->currentPlayer;
    }
    
    public function displayBoard() {
        $this->board->displayBoard();
    }
    
    public function checkWinner() {
        return $this->board->checkWinner($this->currentPlayer->getSymbol());
    }
    
    public function isBoardFull() {
        return $this->board->isFull();
    }
}

// Demo: Play the game with automated moves
echo "=== TIC TAC TOE GAME ===\n";
echo "Using OOP Principles\n";

$game = new TicTacToe("Alice", "Bob");

echo "\nPlayer 1: " . $game->getCurrentPlayer()->getName() . " (" . $game->getCurrentPlayer()->getSymbol() . ")\n";
$game->switchPlayer();
echo "Player 2: " . $game->getCurrentPlayer()->getName() . " (" . $game->getCurrentPlayer()->getSymbol() . ")\n";

// Automated game play
$game->switchPlayer();
$moves = [
    [0, 0], // Alice plays
    [1, 1], // Bob plays
    [0, 1], // Alice plays
    [2, 1], // Bob plays
    [0, 2]  // Alice plays (Alice wins!)
];

$moveCount = 1;
foreach ($moves as $move) {
    echo "\n--- Move $moveCount ---\n";
    echo "Current Player: " . $game->getCurrentPlayer()->getName() . " (" . $game->getCurrentPlayer()->getSymbol() . ")\n";
    
    if ($game->playMove($move[0], $move[1])) {
        $game->displayBoard();
        
        if ($game->checkWinner()) {
            echo "🎉 " . $game->getCurrentPlayer()->getName() . " WINS! 🎉\n";
            break;
        }
        
        if ($game->isBoardFull()) {
            echo "🤝 Game is a DRAW!\n";
            break;
        }
        
        $game->switchPlayer();
        $moveCount++;
    }
}

?>
