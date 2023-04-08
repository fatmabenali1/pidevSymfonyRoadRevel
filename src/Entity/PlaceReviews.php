<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlaceReviews
 *
 * @ORM\Table(name="place_reviews", indexes={@ORM\Index(name="place_Id", columns={"place_Id"}), @ORM\Index(name="hergeba3", columns={"id_User"})})
 * @ORM\Entity
 */
class PlaceReviews
{
    /**
     * @var int
     *
     * @ORM\Column(name="Review_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $reviewId;

    /**
     * @var string
     *
     * @ORM\Column(name="Place_Name", type="string", length=30, nullable=false)
     */
    private $placeName;

    /**
     * @var int
     *
     * @ORM\Column(name="Rating", type="integer", nullable=false)
     */
    private $rating;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Review_txt", type="string", length=120, nullable=true)
     */
    private $reviewTxt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Review_date", type="date", nullable=false)
     */
    private $reviewDate;

    /**
     * @var \User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_User", referencedColumnName="id_User")
     * })
     */
    private $idUser;

    /**
     * @var \Placetovisit
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Placetovisit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="place_Id", referencedColumnName="Place_Id")
     * })
     */
    private $place;


}
