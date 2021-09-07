<?php

    class PageData {

        private $_title;
        private $_content;

        public function __construct(string $title, string $content) {
            $this->setTitle($title);
            $this->setContent($content);
        }

        public function getTitle(): string {
            return $this->_title;
        }

        public function getContent(): string {
            return $this->_content;
        }

        public function setTitle(string $title): void {
            $this->_title = $title;
        }

        public function setContent(string $content): void {
            $this->_content = $content;
        }
    }