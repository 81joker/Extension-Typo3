<?php

declare(strict_types=1);

namespace PromotionTourWebsite\PromotionEvents\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Event extends AbstractEntity
{
    protected string $title = '';
    protected string $description = '';
    protected ?\DateTime $promotiondate = null;
    protected ?\DateTime $promotiontime = null;
    protected string $location = '';
    protected string $locationlink = '';

    // GETTERS
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPromotiondate(): ?\DateTime
    {
        return $this->promotiondate;
    }

    public function getPromotiontime(): ?\DateTime
    {
        return $this->promotiontime;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getLocationlink(): string
    {
        return $this->locationlink;
    }

    // SETTERS (MISSING - THIS IS YOUR PROBLEM!)
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setPromotiondate(?\DateTime $promotiondate): void
    {
        $this->promotiondate = $promotiondate;
    }

    public function setPromotiontime(?\DateTime $promotiontime): void
    {
        $this->promotiontime = $promotiontime;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    public function setLocationlink(string $locationlink): void
    {
        $this->locationlink = $locationlink;
    }
}
