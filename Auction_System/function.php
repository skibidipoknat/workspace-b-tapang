<?php 
    class Item {
        private $name;
        private $description;
        private $startingPrice;
        private $id;
        private $seller;
        private $bidder;
        private $amount;

        public function __construct($name, $description, $startingPrice) {
            $this->name = $name;
            $this->description = $description;
            $this->startingPrice = $startingPrice;
        }

        public function listItem($seller) {
            $this->seller = $seller;
        }

        public function placeBid($bidder, $amount) {
            $this->bidder = $bidder;
            $this->amount = $amount;
        }

        public function getName() {
            return $this->name;
        }
        public function getDescription() {
            return $this->description;
        }
        public function getStartingPrice() {
            return $this->startingPrice;
        }

        public function getSeller() {
            return $this->seller;
        }

        public function getBidder() {
            return $this->bidder;
        }

        public function getAmount() {
            return $this->amount;
        }
    }

    class Bidder {        
        private $id;
        private $item;
        private $amount;
        private $name;
        
        public function __construct($name, $id) {
            $this->name = $name;
            $this->id = $id;
        }

        public function bidOnItem($item, $amount) {
            $this->item = $item;
            $this->amount = $amount;
        }

        public function withdrawBid($item) {
            $this->item = $item;
        }

        public function getItem() {
            return $this->item;
        }

        public function getAmount() {
            return $this->amount;
        }
    }

?>