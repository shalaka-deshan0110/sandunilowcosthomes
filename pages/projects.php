<div class="page-header">
    <div class="container">
        <h1>Our Projects</h1>
        <p>Explore our portfolio of completed construction projects</p>
    </div>
</div>

<section class="projects-section">
    <div class="container">
        <div class="projects-filter">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="residential">Residential</button>
            <button class="filter-btn" data-filter="commercial">Commercial</button>
            <button class="filter-btn" data-filter="renovation">Renovation</button>
            <button class="filter-btn" data-filter="addition">Addition</button>
        </div>

        <div class="projects-grid">
            <div class="project-item" data-category="residential">
                <div class="project-image">
                    <img src="images/project1.jpg" alt="Modern Family Home">
                    <div class="project-overlay">
                        <div class="project-info">
                            <h3>Modern Family Home</h3>
                            <p>Custom residential construction</p>
                            <a href="#" class="btn-view-project">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="project-item" data-category="renovation">
                <div class="project-image">
                    <img src="images/project2.jpg" alt="Kitchen Renovation">
                    <div class="project-overlay">
                        <div class="project-info">
                            <h3>Kitchen Renovation</h3>
                            <p>Complete kitchen remodeling</p>
                            <a href="#" class="btn-view-project">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="project-item" data-category="addition">
                <div class="project-image">
                    <img src="images/project3.jpg" alt="Home Addition">
                    <div class="project-overlay">
                        <div class="project-info">
                            <h3>Home Addition</h3>
                            <p>Second floor addition to existing home</p>
                            <a href="#" class="btn-view-project">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="project-item" data-category="commercial">
                <div class="project-image">
                    <img src="images/project4.jpg" alt="Office Building">
                    <div class="project-overlay">
                        <div class="project-info">
                            <h3>Office Building</h3>
                            <p>Modern commercial office space</p>
                            <a href="#" class="btn-view-project">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="project-item" data-category="residential">
                <div class="project-image">
                    <img src="images/project5.jpg" alt="Luxury Villa">
                    <div class="project-overlay">
                        <div class="project-info">
                            <h3>Luxury Villa</h3>
                            <p>High-end residential construction</p>
                            <a href="#" class="btn-view-project">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="project-item" data-category="renovation">
                <div class="project-image">
                    <img src="images/project6.jpg" alt="Bathroom Remodel">
                    <div class="project-overlay">
                        <div class="project-info">
                            <h3>Bathroom Remodel</h3>
                            <p>Modern bathroom renovation</p>
                            <a href="#" class="btn-view-project">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="project-item" data-category="addition">
                <div class="project-image">
                    <img src="images/project7.jpg" alt="Sunroom Addition">
                    <div class="project-overlay">
                        <div class="project-info">
                            <h3>Sunroom Addition</h3>
                            <p>Custom sunroom addition to existing home</p>
                            <a href="#" class="btn-view-project">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="project-item" data-category="commercial">
                <div class="project-image">
                    <img src="images/project8.jpg" alt="Retail Space">
                    <div class="project-overlay">
                        <div class="project-info">
                            <h3>Retail Space</h3>
                            <p>Commercial retail construction</p>
                            <a href="#" class="btn-view-project">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Modal -->
<div class="project-modal" id="projectModal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="modal-body">
            <div class="modal-image-gallery">
                <div class="main-image">
                    <img src="" alt="Project Image" id="modalMainImage">
                </div>
                <div class="thumbnail-images">
                    <img src="images/project1.jpg" alt="Thumbnail 1" class="thumbnail">
                    <img src="images/project2.jpg" alt="Thumbnail 2" class="thumbnail">
                    <img src="images/project3.jpg" alt="Thumbnail 3" class="thumbnail">
                </div>
            </div>
            <div class="modal-project-details">
                <h2 id="modalProjectTitle">Project Title</h2>
                <p class="project-category" id="modalProjectCategory">Category</p>
                <div class="project-description" id="modalProjectDescription">
                    <p>Project description will go here.</p>
                </div>
                <div class="project-meta">
                    <div class="meta-item">
                        <h4>Client</h4>
                        <p id="modalProjectClient">Client Name</p>
                    </div>
                    <div class="meta-item">
                        <h4>Location</h4>
                        <p id="modalProjectLocation">Project Location</p>
                    </div>
                    <div class="meta-item">
                        <h4>Completed</h4>
                        <p id="modalProjectDate">Completion Date</p>
                    </div>
                    <div class="meta-item">
                        <h4>Services</h4>
                        <p id="modalProjectServices">Services Provided</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Have a Construction Project in Mind?</h2>
            <p>Let's discuss how we can bring your vision to life.</p>
            <a href="index.php?page=contact" class="btn btn-secondary">Contact Us Now</a>
        </div>
    </div>
</section>
