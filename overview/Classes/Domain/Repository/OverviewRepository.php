<?php

declare(strict_types=1);

namespace OverviewWebsite\Overview\Domain\Repository;

use OverviewWebsite\Overview\Domain\Model\Overview;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * Repository for Overview objects.
 */
/**
 * @extends Repository<Overview>
 */
class OverviewRepository extends Repository
{
    /**
     * @var string
     */
    protected $entityClassName = Overview::class;

    public function initializeObject(): void
    {
        $querySettings = $this->createQuery()->getQuerySettings();
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }

    /**
     * @return QueryResultInterface<Overview>
     */
    public function findUpcoming(): QueryResultInterface
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
