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
		
		/** State in which the item is.
		 *
		 * @ORM\Column(type="text")
		 */
		private string $state = 'to_do';
		
		/**
		 * @return string
		 */
		public function getState(): string
		{
			return $this->state;
		}
		
		/**
		 * @param string $state
		 */
		public function setState(string $state): void
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