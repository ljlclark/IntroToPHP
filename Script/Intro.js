// Intro.js

function LJCIsLocal()
{
  const isLocal = localStorage.getItem("isLocal");
  if (isLocal == "local")
  {
    home.href = "indexLocal.html";
  }
}

// Encode to HTML Entities.
function Encode(text)
{
  text = text.replace(/&/g, "&amp;");
  text = text.replace(/</g, "&lt;");
  text = text.replace(/>/g, "&gt;");
  text = text.replace(/"/g, "&quot;");
  text = text.replace(/'/g, "&#039;");
}

function GetOrigin(origin)
{
  if ("null" == origin)
  {
    origin = "*";
  }
  return origin;
}
