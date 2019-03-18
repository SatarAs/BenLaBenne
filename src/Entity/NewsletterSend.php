<?php


namespace App\Entity;


class NewsletterSend
{
    public $NewsletterSend;

    public $Newsletter;

    /**
     * @return mixed
     */
    public function getNewsletter()
    {
        return $this->Newsletter;
    }

    /**
     * @param mixed $Newsletter
     */
    public function setNewsletter($Newsletter): void
    {
        $this->Newsletter = $Newsletter;
    }

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