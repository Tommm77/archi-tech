<?php

namespace App\Controller\Admin;

use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\File;
use App\Entity\User;

class DashboardController extends AbstractDashboardController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $totalFiles = $this->entityManager->getRepository(File::class)->count([]);
        $today = new \DateTime('today');
        $tomorrow = new \DateTime('tomorrow');
        $filesTodayCount = $this->entityManager->getRepository(File::class)
                                    ->createQueryBuilder('f')
                                    ->select('COUNT(f.id)')
                                    ->where('f.uploadDate >= :today')
                                    ->andWhere('f.uploadDate < :tomorrow')
                                    ->setParameter('today', $today)
                                    ->setParameter('tomorrow', $tomorrow)
                                    ->getQuery()
                                    ->getSingleScalarResult();

        $filesPerUser = $this->entityManager->getRepository(File::class)
                                     ->createQueryBuilder('f')
                                     ->select('IDENTITY(f.owner) as userId, COUNT(f.id) as fileCount')
                                     ->groupBy('f.owner')
                                     ->getQuery()
                                     ->getResult();

        return $this->render('admin/dashboard.html.twig', [
            'totalFiles' => $totalFiles,
            'filesToday' => $filesTodayCount,
            'filesPerUser' => $filesPerUser,
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Archi Tech');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Files', 'fa fa-file', File::class);
        yield MenuItem::linkToCrud('Users', 'fa fa-user', User::class);
    }
}
