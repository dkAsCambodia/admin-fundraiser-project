
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
  <style>
  	* {
  margin: 0;
  padding: 0;
  /* box-sizing: border-box;
  font-family: "Roboto Condensed", sans-serif; */
}

button {
  cursor: pointer;
}

::-webkit-scrollbar {
  width: 10px;
}

::-webkit-scrollbar-thumb {
  background-color: #ddd;
  border-radius: 10px;
}

::-webkit-scrollbar-track {
  background-color: #a0a0a0;
}

header {
  background-color: #2f2f39;
  width: 100%;
  position: fixed;
  z-index: 1000;
}

.nav-container {
  width: 85%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.logo {
  display: flex;
  align-items: center;
  color: #fff;
  height: 100%;
}

.logo svg {
  height: 50px;
  width: 50px;
  margin: 10px 15px;
}

.logo span {
  font-size: 1.5rem;
  font-weight: 700;
}

.bar {
  width: 40px;
  height: 6px;
  background-color: #fff;
  transition: all 0.3s linear;
}

.hamberger-label:hover > .bar {
  filter: drop-shadow(0 0 5px #fff);
}

.bar:not(:last-child) {
  margin-bottom: 4px;
}

#hamberger-menu {
  display: none;
}

.hamberger-label {
  margin: 5px 15px;
  cursor: pointer;
}

#hamberger-menu:checked ~ label > .bar:first-child {
  transform: rotate(45deg) translateY(13px);
}

#hamberger-menu:checked ~ label > .bar:nth-child(2) {
  opacity: 0;
}

#hamberger-menu:checked ~ label > .bar:last-child {
  transform: rotate(-45deg) translateY(-13px);
}

#hamberger-menu:checked ~ .nav-ul {
  transform: translateX(0);
}

.nav-ul {
  display: flex;
  justify-content: space-between;
}

.nav-ul > .nav-links {
  cursor: pointer;
  background-color: #2f2f39;
  position: relative;
}

.nav-ul > .nav-links:hover > .sub-nav-links {
  transform: translateY(0);
  opacity: 1;
}

.nav-links {
  list-style: none;
  margin: 0;
  transition: all 0.3s ease-in;
}

.nav-ul .nav-links:hover > .nav-links-item {
  filter: drop-shadow(0 0 10px #ccc);
  color:#1675ac;
}

.nav-links-item {
  display: block;
  text-decoration: none;
  color: #fff;
  padding: 20px 1rem;
  width: 100%;
}

.sub-nav-links {
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.3s ease-in-out;
  background-color: #2f2f39;
  position: absolute;
  min-width: 120px;
  top: 100%;
  left: 0;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.4);
}

.sub-nav-links > .nav-links {
  width: 100%;
  text-align: center;
}

.sub-nav-links > .nav-links:hover {
  background-color: #2f2f39;
}

.tools {
  display: flex;
}

.tools button {
  background-color: transparent;
  padding: 10px;
  border: none;
}

.tools button:not(:last-child) {
  margin-right: 5px;
}

button.theme {
  border-radius: 5px;
  background-color: #fff;
}
@media screen and (min-width: 1030px) {
  .hamberger-label {
    display: none;
  }
}

@media screen and (max-width: 1030px) {
  .logo {
    margin-right: auto;
  }
  .nav-ul {
    overflow-y: auto;
    background-color: #2f2f39;
    position: absolute;
    top: 100%;
    left: 0;
    width: 300px;
    height: 100vh;
    flex-direction: column;
    justify-content: flex-start;
    transform: translateX(-400px);
    transition: transform 0.3s linear;
  }

  .nav-links-item {
    border-bottom: 2px solid #fff;
  }

  .sub-nav-links {
    background-color: #2d86de;
    position: static;
    pointer-events: auto;
    box-shadow: unset;
    transform: translateY(0);
    transition: all 0.3s ease;
    opacity: 0;
    height: 0;
    overflow: hidden;
  }

  .sub-nav-links.show {
    opacity: 1;
    height: 100%;
  }

  .sub-nav-links > .nav-links {
    text-align: left;
  }
}
.logoClass {
    height: 50px;
    width: 50px;
}

  </style>

  <header>
    <nav class="nav-container">
        <a href="/" class="logo align-items-center">
            <img src="{{ URL::to('admin_panel/favicon.png') }}" class="logoClass" />
        </a>
      <input type="checkbox" id="hamberger-menu" />
      <label for="hamberger-menu" class="hamberger-label">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </label>
      <ul class="nav-ul">
        <li class="nav-links">
          <a href="/insights" wire:navigate class="nav-links-item">Insights</a>
        </li>
        <li class="nav-links">
            <a class="nav-links-item">GMD Admin</a>
            <ul class="sub-nav-links">
              <li class="nav-links">
                <a href="/setting/personal" wire:navigate class="nav-links-item"><i class="fa fa-gear" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="nav-links">
                <a href="/sign-out" class="nav-links-item"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
        </li>
        <li class="nav-links">
          <a href="/donations" wire:navigate class="nav-links-item">Donations</a>
        </li>
        <li class="nav-links">
          <a href="/campaigns" wire:navigate class="nav-links-item">Campaigns</a>
        </li>
            @if (auth()->user()->roles == App\Enums\Roles::SUPERADMIN->value && auth()->user()->roles == App\Enums\Roles::SUPERADMIN->value)
                <li class="nav-links">
                    <a href="/account/dashboard" wire:navigate class="nav-links-item">Accounts</a>
                </li>         
            @endif
      </ul>
      <div class="tools">
       
      </div>
    </nav>
  </header><br/><br/><br/>
  <script>
	  	let mainNavLi = document.querySelectorAll(".nav-ul > .nav-links");
		let subNavUl = document.querySelectorAll(".sub-nav-links");
		// console.log(subNavUl);
		mainNavLi.forEach((navLinks, index) => {
		  if (navLinks.children.length > 1) {
		    navLinks.addEventListener("click", () => {
		      if (index != 0) subNavUl[index - 1].classList.toggle("show");
		      else subNavUl[index].classList.toggle("show");
		    });
		  }
		});
  </script>
