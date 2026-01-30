<?php

declare(strict_types=1);

namespace OverviewWebsite\Overview\Tests\Unit\Controller;

use OverviewWebsite\Overview\Controller\OverviewController;
use OverviewWebsite\Overview\Domain\Repository\OverviewRepository;
use PHPUnit\Framework\TestCase;
use TYPO3\CMS\Core\Http\HtmlResponse;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3Fluid\Fluid\View\ViewInterface;

class OverviewControllerTest extends TestCase
{
    public function testShowActionAssignsAboutsAndReturnsHtmlResponse(): void
    {
        $queryResultMock = $this->createMock(QueryResultInterface::class);

        $overviewRepositoryMock = $this->createMock(OverviewRepository::class);
        $overviewRepositoryMock
            ->expects($this->once())
            ->method('findUpcoming')
            ->willReturn($queryResultMock);

        $viewMock = $this->createMock(ViewInterface::class);
        $viewMock
            ->expects($this->once())
            ->method('assign')
            ->with('abouts', $queryResultMock);

        $controller = $this->getMockBuilder(OverviewController::class)
            ->setConstructorArgs([$overviewRepositoryMock])
            ->onlyMethods(['htmlResponse'])
            ->getMock();

        $reflection = new \ReflectionClass($controller);
        $property = $reflection->getProperty('view');
        $property->setAccessible(true);
        $property->setValue($controller, $viewMock);

        $controller
            ->expects($this->once())
            ->method('htmlResponse')
            ->willReturn(new HtmlResponse(''));

        $result = $controller->showAction();

        $this->assertInstanceOf(HtmlResponse::class, $result);
    }
}
