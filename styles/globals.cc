body {
  margin: auto;
  background-image: url(../Pictures/gold_background.jpg);
  object-fit: fill;
}

header {
  background-color: rgb(59, 6, 6);
  margin: 0px;
  border: 0px;
  padding-left: 10px;
  padding-right: 10px;
  display: flex;
  flex-direction: row;
  height: 114px;
}
header .headerContainer {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}
header .headerContainer .mainContact {
  display: flex;
  flex-wrap: nowrap;
  flex-direction: row;
  justify-content: flex-end;
  align-items: baseline;
  flex-shrink: 1;
}
header .headerContainer .mainContact p {
  color: whitesmoke;
}
@media (max-width: 530px) {
  header .headerContainer .mainContact {
    visibility: hidden;
  }
}
header .headerContainer .mainContact .telephone {
  display: inline-flex;
  padding-right: 20px;
}
header .headerContainer .mainContact .telephone #phoneIcon {
  height: 30px;
  width: 30px;
  align-self: center;
  padding-right: 5px;
}
header .headerContainer .mainContact .email {
  display: inline-flex;
}
header .headerContainer .mainContact .email #emailIcon {
  height: 30px;
  width: 30px;
  align-self: center;
  padding-right: 5px;
}
header .headerContainer .navigationMenu {
  display: flex;
  flex-wrap: nowrap;
  flex-direction: row;
  justify-content: flex-end;
  align-items: center;
  max-height: 60px;
  padding-left: 10px;
  overflow: hidden;
}
header .headerContainer .navigationMenu button {
  display: inline-flex;
  flex-direction: row-reverse;
  background-color: transparent;
  border: none;
  align-items: center;
  height: 60px;
}
header .headerContainer .navigationMenu button p {
  color: rgb(255, 230, 9);
  font-family: "Times New Roman", Times, serif;
  font-size: large;
  padding-right: 10px;
  font-weight: bold;
  letter-spacing: 2px;
}
@media (min-width: 1080px) {
  header .headerContainer .navigationMenu button {
    visibility: hidden;
  }
}
header .headerContainer .navigationMenu nav {
  display: inline;
  text-decoration: none;
  text-transform: uppercase;
  justify-content: flex-end;
  height: auto;
  overflow: hidden;
}
header .headerContainer .navigationMenu nav li {
  list-style-type: none;
  display: inline;
  padding: 10px 10px;
  text-shadow: 0px 0px 1px rgb(255, 230, 9);
}
header .headerContainer .navigationMenu nav li a:link, header .headerContainer .navigationMenu nav li a:visited {
  text-decoration: none;
  color: rgb(255, 230, 9);
}

main {
  background-color: rgba(252, 213, 87, 0.893);
  padding-left: 30px;
  padding-right: 30px;
}

section {
  text-align: center;
}

h1 {
  color: rgb(59, 6, 6);
  text-transform: uppercase;
  padding-top: 30px;
  margin: 0;
}

h2 {
  color: rgb(59, 6, 6);
  font-style: oblique;
  text-transform: uppercase;
  font-size: large;
}

.sectionImages {
  display: flex;
  flex-direction: column;
  justify-content: center;
  max-height: 250px;
  width: 100%;
  padding-bottom: 30px;
}
.sectionImages img {
  height: 200px;
  background-position: center;
  background-size: contain;
  background-repeat: no-repeat;
}

#separator {
  max-width: 100%;
  height: auto;
  box-sizing: border-box;
}

footer {
  background-color: rgb(59, 6, 6);
  margin: 0px;
  border: 0px;
  padding-left: 10px;
  padding-right: 10px;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  text-align: center;
}
footer .hotelInformation {
  color: rgb(255, 230, 9);
}
footer .references {
  color: antiquewhite;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
@media (max-width: 450px) {
  footer .references {
    flex-direction: column;
  }
}

/*# sourceMappingURL=globals.cc.map */
