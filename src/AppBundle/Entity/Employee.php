<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="employees")
*/
class Employee
{
/**
 * @ORM\Column(type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */
private $emp_no;

/**
 * @ORM\Column(type="date")
 */
private $birth_date;

/**
 * @ORM\Column(type="string", length=14)
 */
private $first_name;

/**
 * @ORM\Column(type="string", length=16)
 */
private $last_name;

/**
 * @ORM\Column(type="string", length=1)
 */
private $gender;

/**
 * @ORM\Column(type="date")
 */
private $hire_date;
}
