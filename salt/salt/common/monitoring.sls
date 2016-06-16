create user:
  user.present:
    - shell: /bin/bash
    - name: {{ pillar['username'] }}
    - password: {{ pillar['password'] }}
