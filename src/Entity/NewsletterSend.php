<?php


namespace App\Entity;


class NewsletterSend
{
    public $NewsletterSend;

    /**
     * @return mixed
     */
    public function getNewsletterSend()
    {
        return $this->NewsletterSend;
    }

    /**
     * @param mixed $NewsletterSend
     */
    public function setNewsletterSend($NewsletterSend)
    {
        $this->NewsletterSend = $NewsletterSend;
    }
}