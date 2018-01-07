Vagrant.configure(2) do |config|
  config.vm.box = "ubuntu/trusty64"

  config.vm.network "forwarded_port", guest: 80, host: 8088
  config.vm.network "private_network", ip: "192.168.56.150"

  config.vm.hostname = "vagrant-symonfy"

  config.vm.synced_folder ".", "/var/www/symfony", id: "v-root", mount_options: ["rw", "tcp", "nolock", "noacl", "async"], type: "nfs", nfs_udp: false

  config.vm.provider :virtualbox do |vb|
    vb.customize ["modifyvm", :id, "--memory", "2048"]
  end

  config.vm.provision :ansible do |ansible|
    ansible.playbook = "ansible/playbook.yml"
    ansible.verbose = 'vvv'
    ansible.inventory_path = "ansible/hosts"
    ansible.limit = 'development'
  end

end
