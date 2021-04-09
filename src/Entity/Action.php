<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Action
 *
 * @ORM\Table(name="action", indexes={@ORM\Index(name="IDX_47CC8C9229F4B125", columns={"type_action_id"}), @ORM\Index(name="IDX_47CC8C92D4D57CD", columns={"staff_id"}), @ORM\Index(name="IDX_47CC8C927294869C", columns={"article_id"})})
 * @ORM\Entity
 */
class Action
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \TypeAction
     *
     * @ORM\ManyToOne(targetEntity="TypeAction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_action_id", referencedColumnName="id")
     * })
     */
    private $typeAction;

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * })
     */
    private $article;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="staff_id", referencedColumnName="id")
     * })
     */
    private $staff;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTypeAction(): ?TypeAction
    {
        return $this->typeAction;
    }

    public function setTypeAction(?TypeAction $typeAction): self
    {
        $this->typeAction = $typeAction;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getStaff(): ?User
    {
        return $this->staff;
    }

    public function setStaff(?User $staff): self
    {
        $this->staff = $staff;

        return $this;
    }


}
