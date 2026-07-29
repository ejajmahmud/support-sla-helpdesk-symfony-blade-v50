<?php
declare(strict_types=1);

header('Content-Type: application/json');
echo json_encode([
    'app' => 'support-sla-helpdesk-symfony-blade-v50',
    'category' => 'Customer Helpdesk & Automated SLA Engine',
    'tech' => 'PHP / Symfony & Twig',
    'status' => 'operational'
]);
