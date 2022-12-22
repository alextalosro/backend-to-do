<?php
	
	namespace App\Entity;
	
	use ApiPlatform\Core\Annotation\ApiResource;
	use Doctrine\ORM\Mapping as ORM;
	
	/** A To Do Item
	 *
	 *@ORM\Entity()
	 */
	#[ApiResource]
	class ToDoItem
	{
		/** The id of item.
		 *
		 * @ORM\Id()
		 * @ORM\GeneratedValue()
		 * @ORM\Column(type="integer")
		 *
		 */
		private ?int $id = null;
		
		/** Title of item.
		 *
		 * @ORM\Column()
		 *
		 */
		private string $title = '';
		
		/** The state in which the item is
		 *
		 *@ORM\ManyToOne(targetEntity="App\Entity\State", inversedBy="states")
		 * @ORM\JoinColumn(name="state_id", referencedColumnName="id")
		 */
		private State|null $state = null;
		
		/**
		 * @return State
		 */
		public function getState(): State
		{
			return $this->state;
		}
		
		/**
		 * @param State $state
		 */
		public function setState(State $state): void
		{
			$this->state = $state;
		}
		
		
		/**
		 * @return int|null
		 */
		public function getId(): ?int
		{
			return $this->id;
		}
		
		/**
		 * @return string
		 */
		public function getTitle(): string
		{
			return $this->title;
		}
		
		/**
		 * @param string $title
		 */
		public function setTitle(string $title): void
		{
			$this->title = $title;
		}
		
		
	}