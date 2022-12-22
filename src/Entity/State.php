<?php
	
	namespace App\Entity;
	
	use ApiPlatform\Core\Annotation\ApiResource;
	use Doctrine\Common\Collections\ArrayCollection;
	use Doctrine\Common\Collections\Collection;
	use Doctrine\ORM\Mapping as ORM;
	
	/** State of to do item.
	 * @ORM\Entity()
	 */
	#[ApiResource]
	class State
	{
		/** One state is asigned to many to do items. */
		
		/** The id of status.
		 *
		 * @ORM\Id()
		 * @ORM\GeneratedValue()
		 * @ORM\Column(type="integer")
		 *
		 */
		private ?int $id = null;
		
		/**
		 * @return int|null
		 */
		public function getId(): ?int
		{
			return $this->id;
		}
		
		/**
		 * @param int|null $id
		 */
		public function setId(?int $id): void
		{
			$this->id = $id;
		}
		
		/**
		 * @return string
		 */
		public function getName(): string
		{
			return $this->name;
		}
		
		/**
		 * @param string $name
		 */
		public function setName(string $name): void
		{
			$this->name = $name;
		}
		
		/**
		 * @return Collection
		 */
		public function getTodoItems(): ArrayCollection|Collection
		{
			return $this->todoItems;
		}
		
		/**
		 * @param Collection $todoItems
		 */
		public function setTodoItems(ArrayCollection|Collection $todoItems): void
		{
			$this->todoItems = $todoItems;
		}
		
		/** The main identifier of status
		 *
		 * @ORM\Column()
		 */
		private string $name;
		
		/** @var Collection<int, ToDoItem>
		 * @ORM\OneToMany(targetEntity="App\Entity\ToDoItem", mappedBy="state")
		 */
		private Collection $todoItems;
		
		public function __construct()
		{
			$this->todoItems = new ArrayCollection();
		}
		
	}