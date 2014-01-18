<div id="sidebar-left" class="col-lg-2 col-sm-1">
  <!-- <input type="text" class="search hidden-sm" placeholder="..." /> -->
  <div class="nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse">
    <ul class="nav nav-tabs nav-stacked main-menu">
      <li>
        <a href="<?php echo $this->base . '/admin/dashboard'?>">
          <i class="fa fa-dashboard"></i>
          <span class="hidden-sm">Dashboard</span>
        </a>
      </li>
      <li>
        <a class="dropmenu" href="#">
          <i class="fa fa-globe"></i>
          <span class="hidden-sm">Institucional</span>
        </a>
        <ul>
          <li><a class="submenu" href="<?php echo $this->base . '/admin/institucional/sobre'; ?>"><i class="fa fa-briefcase"></i><span class="hidden-sm"> Sobre</span></a></li>
          <li><a class="submenu" href="<?php echo $this->base . '/admin/institucional/mvv'; ?>"><i class="fa fa-bolt"></i><span class="hidden-sm"> MVV</span></a></li>
          <li><a class="submenu" href="<?php echo $this->base . '/admin/institucional/contato'; ?>"><i class="fa fa-phone"></i><span class="hidden-sm"> Contato</span></a></li>
        </ul>
      </li>
      <li>
        <a class="dropmenu" href="#">
          <i class="fa fa-user"></i>
          <span class="hidden-sm">Admins</span>
          <!--
          <span class="label">
            <i class="fa fa-angle-double-down"></i>
          </span>
          -->
        </a>
        <ul>
          <li><a class="submenu" href="<?php echo $this->base . '/admin/administradores/adicionar'?>"><i class="fa fa-plus"></i><span class="hidden-sm"> Adicionar</span></a></li>
          <li><a class="submenu" href="<?php echo $this->base . '/admin/administradores'?>"><i class="fa fa-bars"></i><span class="hidden-sm"> Listar</span></a></li>
        </ul>
      </li>

      <li>
        <a class="dropmenu" href="#">
          <i class="fa fa-eye"></i>
          <span class="hidden-sm">Usuários</span>
        </a>
        <ul>
          <li><a class="submenu" href="<?php echo $this->base . '/admin/usuarios/adicionar'; ?>"><i class="fa fa-plus"></i><span class="hidden-sm"> Adicionar</span></a></li>
          <li><a class="submenu" href="<?php echo $this->base . '/admin/usuarios'; ?>"><i class="fa fa-bars"></i><span class="hidden-sm"> Listar</span></a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo $this->base . '/admin/imagens'; ?>">
          <i class="fa fa-picture-o"></i>
          <span class="hidden-sm">Imagens</span>
        </a>
      </li>
      <li>
        <a class="dropmenu" href="#">
          <i class="fa fa-edit"></i>
          <span class="hidden-sm">Conteúdos</span>
        </a>
        <ul>
          <li><a class="submenu" href="<?php echo $this->base . '/admin/conteudos/adicionar'?>"><i class="fa fa-plus"></i><span class="hidden-sm"> Adicionar</span></a></li>
          <li><a class="submenu" href="<?php echo $this->base . '/admin/conteudos/'?>"><i class="fa fa-bars"></i><span class="hidden-sm"> Listar</span></a></li>
        </ul>
      </li>
      <li>
        <a class="dropmenu" href="#">
          <i class="fa fa-tags"></i>
          <span class="hidden-sm">Produtos</span>
        </a>
        <ul>
          <li><a class="submenu" href="<?php echo $this->base . '/admin/produtos/adicionar'?>"><i class="fa fa-plus"></i><span class="hidden-sm"> Adicionar</span></a></li>
          <li><a class="submenu" href="<?php echo $this->base . '/admin/produtos/'?>"><i class="fa fa-bars"></i><span class="hidden-sm"> Listar</span></a></li>
        </ul>
      </li>
      <li>
        <a class="dropmenu" href="#">
          <i class="fa fa-envelope"></i>
          <span class="hidden-sm">Mensagens</span>

        </a>
        <ul>
          <li><a class="submenu" href="<?php echo $this->base . '/admin/mensagens/emails'?>"><i class="fa fa-laptop"></i><span class="hidden-sm"> Emails</span></a></li>
          <li><a class="submenu" href="<?php echo $this->base . '/admin/mensagens/formularios'?>"><i class="fa fa-comments"></i><span class="hidden-sm"> Formulários</span></a></li>
        </ul>
      </li>
      <li><a href="<?php echo $this->base . '/admin/sair'?>"><i class="fa fa-lock"></i><span class="hidden-sm">Sair</span></a></li>
    </ul>
  </div>
</div>
