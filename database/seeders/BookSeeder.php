<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::create([
            'title' => 'Book One',
            'author' => 'Author One',
            'description' => 'This is a description for Book One.',
            'published_year' => 2020,
            'image' => 'book1.png',
        ]);

        Book::create([
            'title' => 'Book Two',
            'author' => 'Author Two',
            'description' => 'This is a description for Book Two.',
            'published_year' => 2018,
            'image' => 'book2.png',
        ]);
        Book::create([
            'title' => 'Introduction to the Theory of Computation',
            'author' => 'Michael Sipser',
            'description' => 'A foundational book on computational theory, covering automata, computability, and complexity.',
            'published_year' => 2012,
            'image' => 'book1.png',
        ]);
        
        Book::create([
            'title' => 'Computer Networking: A Top-Down Approach',
            'author' => 'James F. Kurose, Keith W. Ross',
            'description' => 'An excellent book explaining networking concepts starting from application layers down to the physical layer.',
            'published_year' => 2021,
            'image' => 'book1.png',
        ]);
        
        Book::create([
            'title' => 'Artificial Intelligence: A Modern Approach',
            'author' => 'Stuart Russell, Peter Norvig',
            'description' => 'One of the most comprehensive books on artificial intelligence, covering algorithms, machine learning, and robotics.',
            'published_year' => 2020,
            'image' => 'book1.png',
        ]);
        
        Book::create([
            'title' => 'Design Patterns: Elements of Reusable Object-Oriented Software',
            'author' => 'Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides',
            'description' => 'A classic book introducing software design patterns for object-oriented programming.',
            'published_year' => 1994,
            'image' => 'book1.png',
        ]);
        
        Book::create([
            'title' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
            'author' => 'Robert C. Martin',
            'description' => 'A guide to writing clean, maintainable, and efficient code with best practices for software developers.',
            'published_year' => 2008,
            'image' => 'book1.png',
        ]);
        
        Book::create([
            'title' => 'Operating System Concepts',
            'author' => 'Abraham Silberschatz, Peter B. Galvin, Greg Gagne',
            'description' => 'A book covering fundamental concepts of operating systems, including process management and memory allocation.',
            'published_year' => 2018,
            'image' => 'book1.png',
        ]);
        
        Book::create([
            'title' => 'The Pragmatic Programmer: Your Journey to Mastery',
            'author' => 'Andrew Hunt, David Thomas',
            'description' => 'A practical guide for software developers, teaching techniques for becoming a more effective programmer.',
            'published_year' => 2019,
            'image' => 'book1.png',
        ]);
        
        Book::create([
            'title' => 'Structure and Interpretation of Computer Programs',
            'author' => 'Harold Abelson, Gerald Jay Sussman, Julie Sussman',
            'description' => 'A classic introduction to computer science and programming using Scheme.',
            'published_year' => 1996,
            'image' => 'book1.png',
        ]);
        
        Book::create([
            'title' => 'Computer Organization and Design',
            'author' => 'David A. Patterson, John L. Hennessy',
            'description' => 'An essential book on computer architecture and organization, covering hardware and software interfaces.',
            'published_year' => 2020,
            'image' => 'book1.png',
        ]);
        
        Book::create([
            'title' => 'Code: The Hidden Language of Computer Hardware and Software',
            'author' => 'Charles Petzold',
            'description' => 'An insightful book explaining how computers work at a fundamental level, from electrical signals to programming languages.',
            'published_year' => 2000,
            'image' => 'book1.png',
        ]);
        
        Book::create([
            'title' => 'Algorithms',
            'author' => 'Robert Sedgewick, Kevin Wayne',
            'description' => 'A well-explained book on algorithms, including sorting, searching, and graph processing.',
            'published_year' => 2011,
            'image' => 'book1.png',
        ]);
        
        Book::create([
            'title' => 'The Art of Computer Programming',
            'author' => 'Donald E. Knuth',
            'description' => 'A multi-volume work on algorithms and mathematical techniques used in computer science.',
            'published_year' => 1968,
            'image' => 'abook1.png',
        ]);
        
        Book::create([
            'title' => 'Compilers: Principles, Techniques, and Tools',
            'author' => 'Alfred V. Aho, Monica S. Lam, Ravi Sethi, Jeffrey D. Ullman',
            'description' => 'A comprehensive book on compiler design, also known as "The Dragon Book".',
            'published_year' => 2006,
            'image' => 'book1.png',
        ]);
        
        Book::create([
            'title' => 'You Don’t Know JS',
            'author' => 'Kyle Simpson',
            'description' => 'A series of books that deeply explore JavaScript and its mechanics.',
            'published_year' => 2015,
            'image' => 'you_dont_know_js.jpg',
        ]);
        
        Book::create([
            'title' => 'Eloquent JavaScript',
            'author' => 'Marijn Haverbeke',
            'description' => 'A book covering JavaScript fundamentals and advanced concepts, with hands-on exercises.',
            'published_year' => 2018,
            'image' => 'eloquent_js.jpg',
        ]);
        
        Book::create([
            'title' => 'Refactoring: Improving the Design of Existing Code',
            'author' => 'Martin Fowler',
            'description' => 'A guide on improving code quality through refactoring techniques.',
            'published_year' => 2018,
            'image' => 'refactoring.jpg',
        ]);
        
        Book::create([
            'title' => 'The Mythical Man-Month',
            'author' => 'Frederick P. Brooks Jr.',
            'description' => 'A classic book on software engineering and project management.',
            'published_year' => 1975,
            'image' => 'mythical_man_month.jpg',
        ]);
        
        Book::create([
            'title' => 'Introduction to Algorithms',
            'author' => 'Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, Clifford Stein',
            'description' => 'The most widely used textbook on algorithms, known as "CLRS".',
            'published_year' => 2009,
            'image' => 'introduction_to_algorithms.jpg',
        ]);
        
        Book::create([
            'title' => 'Database System Concepts',
            'author' => 'Abraham Silberschatz, Henry F. Korth, S. Sudarshan',
            'description' => 'A comprehensive book on database management systems.',
            'published_year' => 2019,
            'image' => 'database_system_concepts.jpg',
        ]);
        
        Book::create([
            'title' => 'The C Programming Language',
            'author' => 'Brian W. Kernighan, Dennis M. Ritchie',
            'description' => 'The definitive book on the C programming language, written by its creators.',
            'published_year' => 1988,
            'image' => 'c_programming_language.jpg',
        ]);
        
        
        
    }
}