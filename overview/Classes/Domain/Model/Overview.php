<?php

declare(strict_types=1);

namespace OverviewWebsite\Overview\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Overview extends AbstractEntity
{
    protected string $title = '';
    protected string $description = '';
    protected string $firstheade = '';
    protected string $firstsubhead = '';
    protected ?FileReference $firstimage = null;
    protected string $secondheade = '';
    protected string $secondsubhead = '';
    protected ?FileReference $secondimage = null;
    protected string $firstfacebookurl = '';
    protected string $firsttwitterurl = '';
    protected string $firstinstagramurl = '';
    protected string $firstlinkedinurl = '';
    protected string $firstyoutubeurl = '';
    protected string $secondfacebookurl = '';
    protected string $secondtwitterurl = '';
    protected string $secondinstagramurl = '';
    protected string $secondlinkedinurl = '';
    protected string $secondyoutubeurl = '';

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getFirstheade(): string
    {
        return $this->firstheade;
    }
    public function setFirstheade(string $firstheade): void
    {
        $this->firstheade = $firstheade;
    }
    public function getFirstsubhead(): string
    {
        return $this->firstsubhead;
    }
    public function setFirstsubhead(string $firstsubhead): void
    {
        $this->firstsubhead = $firstsubhead;
    }
    public function getFirstimage(): ?FileReference
    {
        return $this->firstimage;
    }
    public function setFirstimage(?FileReference $firstimage): void
    {
        $this->firstimage = $firstimage;
    }

    public function getSecondheade(): string
    {
        return $this->secondheade;
    }
    public function setSecondheade(string $secondheade): void
    {
        $this->secondheade = $secondheade;
    }
    public function getSecondsubhead(): string
    {
        return $this->secondsubhead;
    }
    public function setSecondsubhead(string $secondsubhead): void
    {
        $this->secondsubhead = $secondsubhead;
    }
    public function getSecondimage(): ?FileReference
    {
        return $this->secondimage;
    }
    public function setSecondimage(?FileReference $secondimage): void
    {
        $this->secondimage = $secondimage;
    }
    public function getFirsttwitterurl(): string
    {
        return $this->firsttwitterurl;
    }
    public function setFirsttwitterurl(string $firsttwitterurl): void
    {
        $this->firsttwitterurl = $firsttwitterurl;
    }
    public function getSecondtwitterurl(): string
    {
        return $this->secondtwitterurl;
    }
    public function setSecondtwitterurl(string $secondtwitterurl): void
    {
        $this->secondtwitterurl = $secondtwitterurl;
    }
    public function getFirstfacebookurl(): string
    {
        return $this->firstfacebookurl;
    }
    public function setFirstfacebookurl(string $firstfacebookurl): void
    {
        $this->firstfacebookurl = $firstfacebookurl;
    }
    public function getSecondfacebookurl(): string
    {
        return $this->secondfacebookurl;
    }
    public function setSecondfacebookurl(string $secondfacebookurl): void
    {
        $this->secondfacebookurl = $secondfacebookurl;
    }
    public function getFirstinstagramurl(): string
    {
        return $this->firstinstagramurl;
    }
    public function setFirstinstagramurl(string $firstinstagramurl): void
    {
        $this->firstinstagramurl = $firstinstagramurl;
    }
    public function getSecondinstagramurl(): string
    {
        return $this->secondinstagramurl;
    }
    public function setSecondinstagramurl(string $secondinstagramurl): void
    {
        $this->secondinstagramurl = $secondinstagramurl;
    }
    public function getFirstlinkedinurl(): string
    {
        return $this->firstlinkedinurl;
    }
    public function setFirstlinkedinurl(string $firstlinkedinurl): void
    {
        $this->firstlinkedinurl = $firstlinkedinurl;
    }
    public function getSecondlinkedinurl(): string
    {
        return $this->secondlinkedinurl;
    }
    public function setSecondlinkedinurl(string $secondlinkedinurl): void
    {
        $this->secondlinkedinurl = $secondlinkedinurl;
    }
    public function getFirstyoutubeurl(): string
    {
        return $this->firstyoutubeurl;
    }
    public function setFirstyoutubeurl(string $firstyoutubeurl): void
    {
        $this->firstyoutubeurl = $firstyoutubeurl;
    }
    public function getSecondyoutubeurl(): string
    {
        return $this->secondyoutubeurl;
    }
    public function setSecondyoutubeurl(string $secondyoutubeurl): void
    {
        $this->secondyoutubeurl = $secondyoutubeurl;
    }
}
