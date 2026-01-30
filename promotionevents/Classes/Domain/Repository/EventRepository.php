<?php

declare(strict_types=1);

namespace PromotionTourWebsite\PromotionEvents\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;

class EventRepository extends Repository
{
    public function initializeObject(): void
    {
        $querySettings = $this->createQuery()->getQuerySettings();
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }
    public function findUpcoming()
    {
        //     $query = $this->createQuery();

        //     $query->greaterThan('promotiondate', new \DateTime('now'));

        //     $query->setOrderings([
        //         'promotiondate' => QueryInterface::ORDER_ASCENDING,
        //     ]);

        //     $query->setLimit(3);

        //     return $query->execute();
        return $this->findAll();
    }
}
